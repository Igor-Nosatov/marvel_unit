<?php
namespace App\Http\Controllers;

use App\Hero;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\CreateHeroRequest;
use App\Http\Requests\UpdateHeroRequest;
use App\Repositories\Eloquents\HeroRepository;

class HeroController extends Controller
{
    protected $hero;

    public function __construct(HeroRepository $hero)
    {
        $this->hero = $hero;
    }

    public function index()
    {
        $heroes = $this->hero->getPaginateHero();
        return view('pages.index', compact(['heroes']));
    }

    public function show($id)
    {
        $heroes = $this->hero->showHeroById($id);
        return view('pages.show', compact(['heroes']));
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(CreateHeroRequest $request)
    {
        $this->hero->createHero($request->all());
        return redirect()->route('image.create');
    }
    public function image_create()
    {
        $heroes = $this->hero->createImageHero();
        return view('pages.image_create', compact(['heroes']));
    }
    public function image_store(Request $request)
    {
        $hero = $this->hero->storeImageHero($request);
        return redirect()->route('heroes');
    }
    public function edit($id)
    {
        $heroes = $this->hero->updateHeroAndImage($id);
        return $heroes;
    }

    public function update(Request $request, $id)
    {
        $hero = $this->hero->showHeroById($id);
        $HeroRepo = new HeroRepository($hero);
        $HeroRepo->updateHero($request->all());
        return redirect()->route('heroes');
    }

    public function image_edit(Request $request, $id)
    {
        $hero = $this->hero->editImageHero($request, $id);
        return redirect()->route('heroes');
    }
    public function image_destroy(Request $request, $id)
    {
        $hero = $this->hero->deleteImage($request, $id);
        return redirect()->back();
    }
    public function destroy($id)
    {
        $hero = $this->hero->deleteHero($id);
        return redirect()->route('heroes');
    }
}
