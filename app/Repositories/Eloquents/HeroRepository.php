<?php
namespace App\Repositories\Eloquents;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use App\Http\Requests\CreateHeroRequest;
use App\Http\Requests\ImageRequest;
use App\Hero;
use App\Image;

class HeroRepository
{
	public function __construct(Hero $hero){
		$this->model = $hero;
	}

	public function getPaginateHero()
	{
		return $this->model->with('image')->paginate(5);
	}

	public function showHeroById(int $id) : Hero
	{
		$heroes = $this->model->with(['image'])->findOrFail($id);
		return $this->model->findOrFail($id);
	}

	public function createHero(array $data) : Hero
	{
		return $this->model->create($data);
	}

	public function updateHero(array $data) : bool
	{
			return $this->model->update($data);
	}

	public function createImageHero()
	{
		$heroes = $this->model->latest()->first();
		return $heroes;
	}

	public function updateHeroAndImage($id)
	{
		$heroes = $this->model->with('image')->find($id);
		$image = Image::find($id);
		return $updateHeroAndImage = view('pages.update',compact('heroes', 'image'));
	}

	public function deleteHero($id) : bool
	{
		return $this->model->with('image')->find($id)->delete();
	}

	public function deleteImage(Request $request, $id)
	{
		$hero = Image::find($id);
		$hero->name = $request['name'];
    $hero->save();
    return redirect()->back();
	}



}
