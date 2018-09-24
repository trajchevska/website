<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $projects = [
        [
            'name' => "Adeva's Female Bootcamp",
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, nobis quo ipsam repellat, illum similique quisquam, temporibus, nisi est eligendi dignissimos. Ullam itaque modi illo hic doloremque. Labore, eos, vero!',
            'href' => '',
            'image' => 'female-bootcamp.png',
            'tags' => ['gender equality', 'women in tech'],
        ],[
            'name' => 'We Talk IT: Developers\' Community',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, nobis quo ipsam repellat, illum similique quisquam, temporibus, nisi est eligendi dignissimos. Ullam itaque modi illo hic doloremque. Labore, eos, vero!',
            'href' => '',
            'image' => 'wetalkit.png',
            'tags' => ['developers', 'community'],
        ],[
            'name' => 'Learn IT, Girl',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, nobis quo ipsam repellat, illum similique quisquam, temporibus, nisi est eligendi dignissimos. Ullam itaque modi illo hic doloremque. Labore, eos, vero!',
            'href' => '',
            'image' => 'learnitgirl.png',
            'tags' => ['gender equality', 'women in tech'],
        ],
    ];

    $insights = [
        [
            'name' => "The part of conference speaking that's usually left unsaid.",
            'description' => 'Personal experience: Comping with all the pressure of speaking in front of 800 developers at the largest Laravel Conference in Europe.',
            'href' => 'https://adevait.com/blog/community/speaking-largest-laravel-conference/',
            'image' => 'laraconeu.jpg',
            'tags' => ['public speaking', 'conferences'],
        ],[
            'name' => "Success is not for the extraordinary. It's for everyone.",
            'description' => 'Personal experience: Having the honor to give the freshmen speech at the Faculty of Computer Science and Engineering in Skopje.',
            'href' => '#',
            'image' => 'freshmen-speech.jpeg',
            'tags' => ['motivation', 'experience'],
        ],[
            'name' => "The unexpected twist of the AMP Project",
            'description' => 'AMP Conference insights: The AMP team went beyond speed and introduced quite a few surprises at this year’s conference.',
            'href' => 'https://wetalkit.xyz/introducing-wetalkit-e6e74a4e44da',
            'image' => 'amp.jpeg',
            'tags' => ['conferences', 'technology'],
        ],[
            'name' => "Remote: become a better developer by communicating",
            'description' => 'Being a great developer in a remote environment requires more input than the usual office work. Here are some tips to help you thrive when working remotely.',
            'href' => 'https://adevait.com/blog/remote-work/remote-better-developer-communicating/',
            'image' => 'remote-communication.jpg',
            'tags' => ['remote work', 'developers'],
        ],[
            'name' => "This is what happens when you get to work from wherever you want",
            'description' => 'At the office, Automatticians had an amazing environment, books, games, all the equipment they needed. Why did they choose remote instead?',
            'href' => 'https://wetalkit.xyz/this-is-what-happens-when-you-get-to-work-from-wherever-you-want-e0d7fed0033a',
            'image' => 'automattic.jpeg',
            'tags' => ['remote work'],
        ],[
            'name' => "How to lead a remote team that will actually bring results",
            'description' => 'What would you do if the only thing that mattered was how good your employees are and not where they’re located? Would you go beyond traditional hiring?',
            'href' => 'https://medium.com/@trajchevska/how-to-lead-a-remote-team-that-will-actually-bring-results-4bb6862ac3b7',
            'image' => 'remote-lead.jpeg',
            'tags' => ['remote work', 'leadership'],
        ],[
            'name' => "Growth Lessons From Instagram, Before It Was Instagram",
            'description' => 'Instagram was built in 8 weeks, it went viral in a matter of hours. It looks so easy it’s unnerving. Well…not so fast. There is another side of the story.',
            'href' => 'https://thinkgrowth.org/growth-lessons-from-instagram-before-it-was-instagram-cf414612330b',
            'image' => 'instagram.jpeg',
            'tags' => ['startups', 'growth'],
        ],[
            'name' => "Introducing We Talk IT: the Developers' Community",
            'description' => 'Welcome to We Talk IT: the tech community that empowers developers, encourages collaboration and making a change through technology.',
            'href' => 'https://wetalkit.xyz/introducing-wetalkit-e6e74a4e44da',
            'image' => 'wetalkit.png',
            'tags' => ['community', 'developers'],
        ],[
            'name' => "Women in tech: constant fight for gender balance",
            'description' => 'Even in an era when gender inequality may seem like a problem from the past, things are not yet very balanced. And they are even more alarming in tech world.',
            'href' => 'https://code.likeagirl.io/women-in-tech-constant-fight-for-gender-balance-b1ac9c62990f',
            'image' => 'gender-balance-litg.png',
            'tags' => ['women in tech', 'mentoring'],
        ],
    ];

    $now = \Carbon\Carbon::now();
    $adevaFounded = \Carbon\Carbon::create('2015', '01', '01');
    $adevaLeadYears = $now->diffInYears($adevaFounded);

    return view('index', compact('projects', 'insights', 'adevaLeadYears'));
});
