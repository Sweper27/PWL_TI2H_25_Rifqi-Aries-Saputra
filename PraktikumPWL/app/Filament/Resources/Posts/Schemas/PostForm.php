<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use PHPUnit\Framework\Constraint\ExceptionMessageIsOrContains;


class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                 // (2/3)
                Section::make("Post Details")
                    ->description("Fill in the details of the post")
                    ->icon('heroicon-o-document-text')
                    ->schema([

                        // 2 kolom field utama
                        Group::make([
                            TextInput::make("title")
                            //->rules('required'),
                            ->required()
                            ->minLength(5)
                            ->validationMessages([
                                'required' => 'Title wajib diisi',
                                'minLength' => 'Title minimal 5 karakter',
                                ]),
                            TextInput::make("slug")
                            ->required()
                            ->minLength(3)
                            ->unique(ignoreRecord: true)
                            ->validationMessages([
                                'required' => 'Slug wajib diisi',
                                'minLength' => 'Slug minimal 3 karakter',
                                'unique' => 'Slug sudah digunakan',
                            ]),

                            Select::make("category_id")
                                ->relationship("category", "name")
                                ->required()
                                ->preload()
                                ->searchable()
                                ->validationMessages([
                                    'required' => 'Kategori wajib dipilih',
                                ]),

                            ColorPicker::make("color"),
                        ])->columns(2),

                        // full width
                        MarkdownEditor::make("content")
                            ->columnSpanFull(),

                    ])
                    ->columnSpan(2), // 2/3


                // (1/3)
                Group::make([

                    // Image
                    Section::make("Image Upload")
                        ->icon('heroicon-o-photo')
                        ->schema([
                            FileUpload::make("image")
                                ->required()
                                ->disk("public")
                                ->directory("posts")
                                ->validationMessages([
                                'required' => 'Gambar wajib diupload',
                                ]),
                        ]),

                    // Meta
                    Section::make("Meta Information")
                        ->icon('heroicon-o-cog-6-tooth')
                        ->schema([
                            TagsInput::make("tags"),
                            Checkbox::make("published"),
                            DateTimePicker::make("published_at"),
                        ]),

                ])
                ->columnSpan(1), // 1/3

            ])
            ->columns(3); // grid 3 kolom
    }
}
