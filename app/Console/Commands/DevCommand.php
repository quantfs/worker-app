<?php

namespace App\Console\Commands;

use App\Http\Filters\Var1\WorkerFilter;
use App\Jobs\SomeJob;
use App\Models\Avatar;
use App\Models\Client;
use App\Models\Department;
use App\Models\Position;
use App\Models\Profile;
use App\Models\Project;
use App\Models\ProjectWorker;
use App\Models\Review;
use App\Models\Tag;
use App\Models\Worker;
use Illuminate\Console\Command;

class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'develop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'some develop';

    /**
     * Execute the console command.
     */
    public function handle()
    {
//        $this->prepareData();
//        $this->prepareManyToMany();

        /* Получили рабочего из профиля из БД*/
        //$profile = Profile::find(1);
        //$worker = worker::find($profile->worker_id);
        //dd($worker->toArray());

        /* Получили профиль рабочего из БД */
//        $worker = worker::find(1);
//        $profile = Profile::where('worker_id', $worker->id)->first();
//        dd($profile->toArray());

//        /* Получили рабочего из профиля из модели */
//        $profile = Profile::find(1);
//        dd($profile->worker->toArray());

        /* Получили профиль рабочего из модели */
//        $worker = worker::find(1);
//        dd($worker->profile->toArray());

        /* Получим рабочих для выбранной позиции */
//        $position = Position::find(1);
//        $workers = Worker::where('position_id', $position->id)->get();
//        dd($workers->toArray());

        /* Получим рабочих по id */
//        $workers = Worker::whereIn('id', [1, 3])->get();
//        dd($workers->toArray());

        /* Получим рабочих по id и выведем их должности */
//        $workers = Worker::whereIn('id', [1, 2, 3])->get();
//        $posId = $workers->pluck('position_id')->unique();
//        dd(Position::whereIn('id', $posId)->get()->toArray());

        /* Получим рабочих по id и выведем их должности из модели */
//        $worker = Worker::find(3);
//        dd($worker->position->toArray());

        /* Получим всех рабочих по должности из модели */
//        $position = Position::find(1);
//        dd($position->workers->toArray());

        /* Получим всех рабочих по проекту */
//        $project1 = Project::find(1);
//        $projectWorkers = ProjectWorker::where('project_id', $project1->id)->get();
//        $workerIds = $projectWorkers->pluck('worker_id')->toArray();
//        dd(Worker::whereIn('id', $workerIds)->get()->toArray());

        /* Получим всех рабочих по проекту из модели */
//        $project1 = Project::find(1);
//        dd($project1->workers->toArray());

        /* Получим все проекты рабочего */
//        $worker = Worker::find(5);
//        dd($worker->projects->toArray());

        /* Связь через специальные отношения */
//        $worker = Worker::find(2);
//        $project = Project::find(1);
//        $worker->projects()->toggle($project->id);
        /* и наоборот добавляем в проект рабочих */
//        $project = Project::find(1);
//        $worker1 = Worker::find(2);
//        $worker2 = Worker::find(1);
//        $worker3 = Worker::find(3);
//        $project->workers()->sync($worker1->id);

        /* Найдем боса рабочего депертамента IT */
//        $department = Department::find(1); // деп. IT
//        $position = Position::where('department_id', $department->id)->where('title', 'Boss')->first(); // нашли должность для этого департемената
//        $worker = Worker::where('position_id', $position->id)->first();
//        dd($worker->toArray());
        /* и через модель */
//        $department = Department::find(1); // деп. IT
//        $worker = $department->boss;
//        dd($worker->toArray());

        /* и наоборот найдем департамент у рабочего */
//        $worker = Worker::find(7);
//        dd($worker->position->department->toArray());

        /* Найдем всех рабочих департамента */
//        $department = Department::find(1);
//        dd($department->workers->toArray());


        /* Создаем путь к аватарам */
//        $worker = Worker::find(5);
//        $worker->avatar()->create([
//            'path' => 'some path',
//        ]);
//
//        $client = Client::find(2);
//        $client->avatar()->create([
//            'path' => 'client path',
//        ]);

        /* Берем созданные аватары */
//        $worker = Worker::find(5);
//        dd($worker->avatar->path);

        /* Смотрим кому принадлежит какой-нибудь аватар */
//        $avatar = Avatar::find(1);
//        dd($avatar->avatarable->name);


        /* Создаем отзывы для рабочих и клиентов */
//        $worker = Worker::find(5);
//        $worker->reviews()->create([
//            'body' => 'body 1'
//        ]);
//        $worker->reviews()->create([
//            'body' => 'body 2'
//        ]);
//        $worker->reviews()->create([
//            'body' => 'body 3'
//        ]);
//
//        $client = Client::find(2);
//        $client->reviews()->create([
//            'body' => 'body 1'
//        ]);
//        $client->reviews()->create([
//            'body' => 'body 2'
//        ]);
//        $client->reviews()->create([
//            'body' => 'body 3'
//        ]);
//
//        dump($worker->reviews->toArray());
//
//        $review = Review::where('body', 'body 1')->first();
//        dd($review->reviewable->toArray());

        /* Добавим теги для клиента и рабочего */
//        $worker = Worker::find(5);
//        $client = Client::find(2);
//
//        $worker->tags()->attach([1, 3]);
//        $client->tags()->attach([2, 3]);

        /* Найдем у кого есть 3-ий тег */
//        $tag = Tag::find(3);
//        dd($tag->workers->toArray(), $tag->clients->toArray());

        /* Найдем рабочего по запросу в данном случае самый страший из извесностной должности */
//        $position = Position::first();
//        dd($position->queryWorker->toArray());

        /* Обновим данные рабочего для вызова события обновления */
//        $worker = Worker::find(1);
//        $worker->update([
//            'name' => 'Ivan',
//            'age' => '25.000'
//        ]);

        /* Вызыв Job */
//        SomeJob::dispatchSync()->onQueue('some_queue');

        /* Проверка работы фильтра */
        $workerQuery = Worker::query();

        $filter = new WorkerFilter(['is_married' => true]);

        $filter->apllyFilter($workerQuery);

        dd($workerQuery->get());

        return 0;
    }

    private function prepareData()
    {
        Client::create([
            'name' => 'Bob'
        ]);
        Client::create([
            'name' => 'Viktor'
        ]);
        Client::create([
            'name' => 'Maria'
        ]);


        $department1 = Department::create([
            'title' => 'IT'
        ]);
        $department2 = Department::create([
            'title' => 'Analytics'
        ]);


        $position1 = Position::create([
            'title' => 'Developer',
            'department_id' => $department1->id,
        ]);
        $position2 = Position::create([
            'title' => 'Manager',
            'department_id' => $department1->id,
        ]);
        $position3 = Position::create([
            'title' => 'Designer',
            'department_id' => $department1->id,
        ]);

        $workerData1 = [
            'name' => 'Ivan',
            'surname' => 'Ivanov',
            'email' => 'Ivanov@mail.ru',
            'position_id' => $position1->id,
            'age' => 20,
            'description' => 'Some description',
            'is_married' => 'false'
        ];
        $workerData2 = [
            'name' => 'Karl',
            'surname' => 'Petrov',
            'email' => 'Karl@mail.ru',
            'position_id' => $position2->id,
            'age' => 28,
            'description' => 'Some description',
            'is_married' => 'true'
        ];
        $workerData3 = [
            'name' => 'Kate',
            'surname' => 'Krasavina',
            'email' => 'Kate@mail.ru',
            'position_id' => $position1->id,
            'age' => 18,
            'description' => 'Some description',
            'is_married' => 'false'
        ];
        $workerData4 = [
            'name' => 'John',
            'surname' => 'Johnet',
            'email' => 'John@mail.ru',
            'position_id' => $position1->id,
            'age' => 18,
            'description' => 'Some description',
            'is_married' => false,
        ];
        $workerData5 = [
            'name' => 'Liza',
            'surname' => 'Lizova',
            'email' => 'Liza@mail.ru',
            'position_id' => $position3->id,
            'age' => 18,
            'description' => 'Some description',
            'is_married' => true,
        ];
        $workerData6 = [
            'name' => 'Sofia',
            'surname' => 'Safina',
            'email' => 'Sofia@mail.ru',
            'position_id' => $position3->id,
            'age' => 18,
            'description' => 'Some description',
            'is_married' => false,
        ];

        $worker1 = Worker::create($workerData1);
        $worker2 = Worker::create($workerData2);
        $worker3 = Worker::create($workerData3);
        $worker4 = Worker::create($workerData4);
        $worker5 = Worker::create($workerData5);
        $worker6 = Worker::create($workerData6);


        $profileData1 = [
            'worker_id' => $worker1->id,
            'city' => 'Tokio',
            'skill' => 'Coder',
            'experience' => 5,
            'finished_study_at' => '2020-06-01'
        ];
        $profileData2 = [
            'worker_id' => $worker2->id,
            'city' => 'Rio',
            'skill' => 'Boss',
            'experience' => 10,
            'finished_study_at' => '2014-06-01'
        ];
        $profileData3 = [
            'worker_id' => $worker3->id,
            'city' => 'Oslo',
            'skill' => 'Frontend',
            'experience' => 1,
            'finished_study_at' => '2021-06-01'
        ];
        $profileData4 = [
            'worker_id' => $worker4->id,
            'city' => 'London',
            'skill' => 'Frontend',
            'experience' => 1,
            'finished_study_at' => '2021-06-01',
        ];
        $profileData5 = [
            'worker_id' => $worker5->id,
            'city' => 'Perm',
            'skill' => 'Designer',
            'experience' => 1,
            'finished_study_at' => '2021-06-01',
        ];
        $profileData6 = [
            'worker_id' => $worker6->id,
            'city' => 'Kirov',
            'skill' => 'Designer',
            'experience' => 1,
            'finished_study_at' => '2021-06-01',
        ];

        Profile::create($profileData1);
        Profile::create($profileData2);
        Profile::create($profileData3);
        Profile::create($profileData4);
        Profile::create($profileData5);
        Profile::create($profileData6);
    }

    private function prepareManyToMany()
    {
        $workerManager = Worker::find(2);
        $workerBackend = Worker::find(1);
        $workerDesigner1 = Worker::find(5);
        $workerDesigner2 = Worker::find(6);
        $workerFrontend1 = Worker::find(3);
        $workerFrontend2 = Worker::find(4);

        $project1 = Project::create([
            'title' => 'Shop',
        ]);
        $project2 = Project::create([
            'title' => 'Blog',
        ]);

        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerManager->id
        ]);
        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerBackend->id
        ]);
        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerDesigner1->id
        ]);
        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerFrontend1->id
        ]);

        ProjectWorker::create([
            'project_id' => $project2->id,
            'worker_id' => $workerManager->id
        ]);
        ProjectWorker::create([
            'project_id' => $project2->id,
            'worker_id' => $workerBackend->id
        ]);
        ProjectWorker::create([
            'project_id' => $project2->id,
            'worker_id' => $workerDesigner2->id
        ]);
        ProjectWorker::create([
            'project_id' => $project2->id,
            'worker_id' => $workerFrontend2->id
        ]);
    }
}
