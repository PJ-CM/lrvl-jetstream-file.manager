<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\File;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Resources extends Component
{
    use WithFileUploads;

    //Ya no hace falta cuando el File:all() pasa al RENDER
    //public $files = [];

    public File $file;
    public $media;
    public $mediaId;

    protected $rules = [
        'file.title' => 'required|min:5|max:255',
        'file.description' => 'required|min:5|max:1000',
        'media' => 'required|image',
    ];

    public $open = false;

    public function mount($id)
    // public function mount()
    {
        // esto mejor en el RENDER para que el listado se regenere
        // en cada interacción
        //$this->files = File::all();

        $this->file = new File;
        //$this->media = '';
        $this->media = null;
        $this->mediaId = 0;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function create()
    {
        // Esto si es depurado desde Livewire
        ////dd(1111);
        // Pero la petición no es posible acceder a ella de esta forma
        // desde Livewire
        //dd(request()->all());
        //Hay que mapear el FILE
        ////dd($this->file);

        $this->validate();

        // Para guardar el registro

        // Explorando lo que va a devolver la propiedad de MEDIA
        //dd($this->media);

        // Se establece una ruta de archivo de prueba temporalmente
        ////$this->file->path = 'lo-que-sea/esto_es.pdf';
        // --------------------------------------
        // Ruta final hacia el archivo subido
        // -> con un nombre de archivo aleatorio:
        // $this->file->path = $this->media->store('');
        // -> con el nombre de archivo original:
        // $this->file->path = $this->media->storeAs('', $this->media->getClientOriginalName());
        // -> con un nombre dado:
        //dd('Auth::user()->name', Auth::user()->name);
        $newFileName = Str::of(Auth::user()->name)->trim() . '-' . Auth::id() . '-' . Carbon::now()->timestamp;
        $newFileName = Str::replace(' ', '', $newFileName);
        $this->file->path = $this->media->storeAs('', $newFileName . '.' . $this->media->getClientOriginalExtension());

        // Y se guarda
        $this->file->save();

        // Reseteando valores del formulario
        //$this->reset(['file', 'media']);
        $this->file = new File;
        $this->reset(['media']);
        // Es posible que las propiedades a resetear deban estar inicializadas
        // con un valor predeterminado para que el reseteo funcione.
        // Aunque al campo de archivo parece que no le basta.
        //Caso especial - resetear el campo de archivo
        //$this->media = null;
        $this->mediaId++;

        // Cerrando el FORM y/o Modal gracias al @entangle
        $this->open = false;
    }

    public function render()
    {
        //return view('livewire.resources');
        // con Orden específico
        return view('livewire.resources')->with([
            ////'files' => File::all(),
            'files' => File::orderBy('id', 'DESC')
                                ->get(),
        ]);
    }
}
