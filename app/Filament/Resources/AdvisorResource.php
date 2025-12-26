<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvisorResource\Pages;
use App\Filament\Resources\AdvisorResource\RelationManagers;
use App\Models\Advisor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\RichEditor;

class AdvisorResource extends Resource
{
    protected static ?string $model = Advisor::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = 'Danışmanlar';

    protected static ?string $pluralModelLabel = 'Danışmanlar';

    protected static ?string $modelLabel = 'Danışman';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->maxLength(255)
                    ->default(null)
                    ->reactive()
                    ->afterStateUpdated(function ($state, Forms\Set $set) {
                        if (!empty($state)) {
                            $set('slug', \Illuminate\Support\Str::slug($state));
                        }
                    }),
                Forms\Components\TextInput::make('slug')
                    ->maxLength(255)
                    ->disabled()
                    ->dehydrated()
                    ->reactive()
                    ->unique(Advisor::class, 'slug', ignoreRecord: true),
                Forms\Components\RichEditor::make('description')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image')
                    ->image()->disk('public')->directory('images/advisors'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAdvisors::route('/'),
            'create' => Pages\CreateAdvisor::route('/create'),
            'edit' => Pages\EditAdvisor::route('/{record}/edit'),
        ];
    }
}
