@extends('twill::layouts.form', [
    'additionalFieldsets' => [
        ['fieldset' => 'metadata', 'label' => 'SEO'],
    ]
])


@section('contentFields')

    @include('Pages.resources.views.admin.fields.template-select')

    @include('Base.resources.views.admin.fields.heading')

    @formField('wysiwyg', [
        'name' => 'intro_content',
        'label' => 'Intro Content',
        'translated' => true,
        'maxlength' => 100,
    ])

    @if($item->template->show_content_editor)
        @formField('block_editor')
    @endif
@stop

@section('fieldsets')
    @metadataFields
@stop
