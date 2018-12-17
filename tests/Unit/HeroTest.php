<?php

namespace Tests\Unit;

use Tests\TestCase;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;

use App\Repositories\Eloquents\HeroRepository;
use App\Http\Requests\UpdateHeroRequest;
use App\Hero;
use App\Image;


class HeroTest extends TestCase
{
	use WithFaker;
	//testing Repository getPaginateHero
	public function testGetPaginateHero()
    {
      $hero = factory(Hero::class,5)->create();
			$heroRepo = new HeroRepository(new Hero);
			$list = $heroRepo->getPaginateHero();
 			$this->assertCount(5, $list->all());
    }

	//testing Repository method  createHero
	public function testCreateHero()
	{
		$data = [
			'nick' => $this->faker->word,
			'real' => $this->faker->word,
			'characteristic' => $this->faker->word,
			'superpowers' => $this->faker->word,
			'catch_phrase' => $this->faker->word,
		];

		$heroRepo = new HeroRepository(new Hero);
		$hero = $heroRepo->createHero($data);

		$this->assertInstanceOf(Hero::class, $hero);
		$this->assertEquals($data['nick'], $hero->nick);
		$this->assertEquals($data['real'], $hero->real);
		$this->assertEquals($data['characteristic'], $hero->characteristic);
		$this->assertEquals($data['superpowers'], $hero->superpowers);
		$this->assertEquals($data['catch_phrase'], $hero->catch_phrase);
	}
 //testing Repository method  updateHero
	public function testUpdateHero()
    {
        $hero = factory(Hero::class)->create();

        $data = [
					'nick' => $this->faker->word,
					'real' => $this->faker->word,
					'characteristic' => $this->faker->word,
					'superpowers' => $this->faker->word,
					'catch_phrase' => $this->faker->word,
        ];

        $HeroRepo = new HeroRepository($hero);
        $update = $HeroRepo->updateHero($data);

        $this->assertTrue($update);
				$this->assertEquals($data['nick'], $hero->nick);
				$this->assertEquals($data['real'], $hero->real);
				$this->assertEquals($data['characteristic'], $hero->characteristic);
				$this->assertEquals($data['superpowers'], $hero->superpowers);
				$this->assertEquals($data['catch_phrase'], $hero->catch_phrase);
    }

	//testing Repository method  showHeroById
	public function testShowHeroById()
	{
		$hero = factory(Hero::class)->create();
		$heroRepo = new HeroRepository(new Hero);
		$found = $heroRepo->showHeroById($hero->id);

		$this->assertInstanceOf(Hero::class, $found);
		$this->assertEquals($found->nick, $hero->nick);
		$this->assertEquals($found->real, $hero->real);
		$this->assertEquals($found->characteristic, $hero->characteristic);
		$this->assertEquals($found->superpowers, $hero->superpowers);
		$this->assertEquals($found->catch_phrase, $hero->catch_phrase);
	}
	//testing Repository method  deleteHero
	public function testDeleteHero()
    {
        $hero = factory(Hero::class)->create();
        $heroRepo = new HeroRepository($hero);
        $deleted = $heroRepo->deleteHero($hero->id);
        $this->assertTrue($deleted);
    }
}
