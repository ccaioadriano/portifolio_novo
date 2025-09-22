<?php

namespace App\Filament\Pages;

use App\Models\About;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Image;
use Filament\Schemas\Schema;

class AboutPage extends Page
{
    protected string $view = 'filament.pages.about-page';


    /**
     * @var array<string, mixed> | null
     */
    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill($this->getRecord()?->attributesToArray());
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Form::make([
                    TextInput::make('name')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('headline')
                        ->label('Headline')
                        ->maxLength(255),

                    FileUpload::make('profile_picture')
                        ->label('Profile Picture')
                        ->image()
                        ->imagePreviewHeight(200)
                        ->directory('perfil')
                        ->visibility('public'),

                    RichEditor::make('bio')
                        ->label('Bio')
                        ->columnSpan('full'),

                    KeyValue::make('social_links')
                        ->label('Social Links')
                        ->keyLabel('Platform')
                        ->valueLabel('URL')
                        ->reorderable()
                        ->addButtonLabel('Adicionar link'),
                ])
                    ->livewireSubmitHandler('save')
                    ->footer([
                        Actions::make([
                            Action::make('Salvar')
                                ->submit('save')
                                ->keyBindings(['mod+s']),
                        ]),
                    ]),
            ])
            ->record($this->getRecord())
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $record = $this->getRecord();

        if (!$record) {
            $record = new About();
        }

        $record->fill($data);
        $record->save();

        if ($record->wasRecentlyCreated) {
            $this->form->record($record)->saveRelationships();
        }

        Notification::make()
            ->success()
            ->title('Saved')
            ->send();
    }

    public function getRecord(): ?About
    {
        return About::first();
    }
}
