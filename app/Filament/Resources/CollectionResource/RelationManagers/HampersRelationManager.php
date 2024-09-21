<?php

namespace App\Filament\Resources\CollectionResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class HampersRelationManager extends RelationManager
{
    protected static string $relationship = 'hampers';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make([
                    'default' => 1,
                    'md' => 6,
                ])
                ->schema([
                    Section::make()
                        ->description('')
                        ->schema([
                            Forms\Components\TextInput::make('title')
                                ->required()
                                ->maxLength(128),
                            Forms\Components\Textarea::make('excerpt')
                                ->required()
                                ->rows(3)
                                ->maxLength(255),
                            Forms\Components\RichEditor::make('hamper_description')
                                ->required()
                                ->columnSpanFull(),
                            Forms\Components\TextInput::make('usual_price')
                                ->numeric(),
                            Forms\Components\TextInput::make('offer_price')
                                ->numeric(),
                            Forms\Components\Toggle::make('is_active')
                                ->default(false),
                            Forms\Components\Toggle::make('has_variants')
                                ->default(false)
                                ->disabled()
                                ->dehydrated(),
                    ])->columnSpan(4),
                    Section::make()
                        ->description('')
                        ->schema([
                            Section::make('SEO')
                                ->description('')
                                ->schema([
                                    Forms\Components\TextInput::make('seo_title')
                                        ->maxLength(128)
                                        ->live(debounce: 500)
                                        ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                                            if (($get('slug') ?? '') !== Str::slug($old)) {
                                                return;
                                            }

                                            $set('slug', Str::slug($state));
                                        }),
                                    Forms\Components\TextInput::make('meta_description')
                                        ->maxLength(255),
                                    Forms\Components\TextInput::make('slug')
                                        ->required()
                                        ->maxLength(128),
                            ]),
                            Section::make('Media')
                                ->description('')
                                ->schema([
                                    Forms\Components\FileUpload::make('thumbnail')
                                        ->image()
                                        ->imageEditor()
                                        ->default('images/default-product-image.jpg'),
                                    CuratorPicker::make('media_id')
                                        ->label('Add Hamper Images')
                                        ->multiple()
                                        ->relationship('media', 'id')
                                    
                            ]),
                    ])->columnSpan(2),
                ]),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                Tables\Columns\TextColumn::make('title'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
                Tables\Actions\AttachAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
