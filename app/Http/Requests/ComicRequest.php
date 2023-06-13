<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3|max:100',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required|numeric',
            'series' => 'required|min:2|max:80',
            'sale_date' => 'required|date',
            'type' => 'required|min:2|max:30',
            'artists' => 'required|min:5',
            'writers' => 'required|min:5',
        ];
    }

    public function messages()
    {
        return[
            // Campi richiesti
            'title.required' => 'Il titolo è un campo obbligatorio',
            'description.required' => 'La Descrizione è un campo obbligatorio',
            'thumb.required' => 'L\'immagine è un campo obbligatorio',
            'price.required' => 'Il Prezzo è un campo obbligatorio',
            'series.required' => 'La Serie è un campo obbligatorio',
            'sale_date.required' => 'La data è un campo obbligatorio',
            'type.required' => 'Il Tipo è un campo obbligatorio',
            'artists.required' => 'L\' artista è un campo obbligatorio',
            'writers.required' => 'Lo Scrittore è un campo obbligatorio',

            // Caratteri massimi
            'title.max' => 'Il Titolo può contenere al massimo :max caratteri',
            'series.max' => 'La Serie può contenere al massimo :max caratteri',
            'type.max' => 'Il Tipo può contenere al massimo :max caratteri',

            // Caratteri Minimi o condizioni varie
            'title.min' => 'Il Titolo può contenere minimo :min caratteri',
            'price.numeric' => 'Il Prezzo può contenere solo numeri',
            'series.min' => 'La Serie può contenere minimo :min caratteri',
            'sale_date.date' => 'La Data può contenere solo questo formato YYYY-mm-dd',
            'type.min' => 'Il Tipo può contenere minimo :min caratteri',
            'artists.min' => 'L\'artista può contenere minimo :min caratteri',
            'writers.min' => 'Lo Scrittore può contenere minimo :min caratteri',

        ];
    }
}
