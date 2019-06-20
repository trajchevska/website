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
            'description' => 'The Female Bootcamp is a non profitable initiative, aimed to raise awareness about the state of women in tech in Macedonia and empower 20 women to pursue a career in tech.',
            'involvement' => 'Organizer and Mentor',
            'href' => 'https://femalebootcamp.adevait.com/',
            'image' => 'female-bootcamp.png',
            'tags' => ['gender equality', 'women in tech'],
        ],[
            'name' => 'We Talk IT: Developers\' Community',
            'description' => 'We Talk IT is a community for developers and tech enthusiasts based in Macedonia. Its goal is to encourage collaboration, promote knowledge sharing and contribute to the growth of the Macedonian tech ecosystem.',
            'href' => 'https://wetalkit.xyz/',
            'involvement' => 'Initiator and Community Leader',
            'image' => 'wetalkit.png',
            'tags' => ['developers', 'community', 'volunteering'],
        ],[
            'name' => 'Learn IT, Girl',
            'description' => 'Learn IT, Girl is a global initiative for improving the state of women in tech. The goal is to match women who think about starting a career in technology with mentors who could help them achieve it.',
            'involvement' => 'Organizer and Mentor',
            'href' => 'https://www.learnitgirl.com/',
            'image' => 'learnitgirl.png',
            'tags' => ['gender equality', 'women in tech', 'volunteering'],
        ],
    ];

    $insights = [
        [
            'name' => "Implementing Agile Processes in Distributed teams",
            'description' => 'Agile companies are hesitant about remote work. Learn how to overcome all challenges by implementing agile processes in a distributed team.',
            'href' => 'https://adevait.com/blog/remote-work/agile-processes-distributed-teams/',
            'image' => 'https://content.adevait.com/wp-content/uploads/2019/01/Agile-processes-in-distributed-teams.jpg',
            'tags' => ['agile', 'remote work'],
        ],[
            'name' => "The Environmental Impact of Remote Work",
            'description' => 'Apart from benefiting the business, remote work also benefits the environment. Working remotely reduces the carbon footprint and increases life quality.',
            'href' => 'https://adevait.com/blog/remote-work/environmental-impact-remote-work/',
            'image' => 'https://content.adevait.com/wp-content/uploads/2018/11/CT-2@2x-100.jpg',
            'tags' => ['public speaking', 'remote work'],
        ],[
            'name' => "The part of conference speaking that's usually left unsaid.",
            'description' => 'Personal experience: Coping with all the pressure of speaking in front of 800 developers at the largest Laravel Conference in Europe.',
            'href' => 'https://adevait.com/blog/community/speaking-largest-laravel-conference/',
            'image' => 'assets/images/blog/laraconeu.jpg',
            'tags' => ['public speaking', 'conferences'],
        ],[
            'name' => "Success is not for the extraordinary. It's for everyone.",
            'description' => 'Personal experience: Having the honor to give the freshmen speech at the Faculty of Computer Science and Engineering in Skopje.',
            'href' => 'https://wetalkit.xyz/success-is-not-for-the-extraordinary-ce459fd7eed2',
            'image' => 'assets/images/blog/freshmen-speech.jpeg',
            'tags' => ['motivation', 'experience'],
        ],[
            'name' => "The unexpected twist of the AMP Project",
            'description' => 'AMP Conference insights: The AMP team went beyond speed and introduced quite a few surprises at this year’s conference.',
            'href' => 'https://wetalkit.xyz/introducing-wetalkit-e6e74a4e44da',
            'image' => 'assets/images/blog/amp.jpeg',
            'tags' => ['conferences', 'technology'],
        ],[
            'name' => "This is what happens when you get to work from wherever you want",
            'description' => '“We focus on two things when hiring. First, find the best people you can in the world. And second, let them do their work. Just get out of their way.“— Matt Mullenweg, CEO at Automattic',
            'href' => 'https://adevait.com/blog/remote-work/this-is-what-happens-when-you-get-to-work-from-wherever-you-want/',
            'image' => 'https://content.adevait.com/wp-content/uploads/2017/10/1_Xlc-7QzlED4ZlRfs6K3hxw.jpeg',
            'tags' => ['remote work'],
        ],[
            'name' => "Remote: become a better developer by communicating",
            'description' => 'Being a great developer in a remote environment requires more input than the usual office work. Here are some tips to help you thrive when working remotely.',
            'href' => 'https://adevait.com/blog/remote-work/remote-better-developer-communicating/',
            'image' => 'assets/images/blog/remote-communication.jpg',
            'tags' => ['remote work', 'developers'],
        ],[
            'name' => "Growth Lessons From Instagram, Before It Was Instagram",
            'description' => 'Instagram was built in 8 weeks, it went viral in a matter of hours. It looks so easy it’s unnerving. Well…not so fast. There is another side of the story.',
            'href' => 'https://thinkgrowth.org/growth-lessons-from-instagram-before-it-was-instagram-cf414612330b',
            'image' => 'assets/images/blog/instagram.jpeg',
            'tags' => ['startups', 'growth'],
        ],[
            'name' => "Women in tech: constant fight for gender balance",
            'description' => 'Even in an era when gender inequality may seem like a problem from the past, things are not yet very balanced. And they are even more alarming in tech world.',
            'href' => 'https://code.likeagirl.io/women-in-tech-constant-fight-for-gender-balance-b1ac9c62990f',
            'image' => 'assets/images/blog/gender-balance-litg.png',
            'tags' => ['women in tech', 'mentoring'],
        ],
    ];

    $conferences = [
        [
            'name' => "PHP UK, <br/>London",
            'description' => 'Opening keynote on the second day of the conference, talking about good software design practices and using SOLID design principles to become better developers.',
            'href' => 'https://www.youtube.com/watch?v=ILFcofVJUF4',
        ],[
            'name' => "Code Talks, Hamburg",
            'description' => 'Speaking about good software design practices at the largest developers\' conference in Germany. The presentation aims to show how what can be a minor effort if done on time can cause major delays if not.',
            'href' => 'https://www.youtube.com/watch?v=rtmFCcjEgEw',
        ],[
            'name' => "Laracon EU, Amsterdam",
            'description' => 'I was talking about SOLID design principles at the largest Laravel conference in Europe. I had the chance to share good design practices with an audience of 800 developers, which was an amazing experience.',
            'href' => 'https://www.youtube.com/watch?v=iS__wLPgfPg',
        ],[
            'name' => "DEVit, Thessaloniki",
            'description' => 'I held a workshop on SOLID design principles and good code design at the leading web developer conference in South East Europe. It helped around 30 developers learn how to write software that\'s easy to extend and maintain.',
            'href' => 'https://devitconf.org/speakers/katerina_trajchevska/',
        ],
    ];

    $now = \Carbon\Carbon::now();
    $adevaFounded = \Carbon\Carbon::create('2015', '01', '01');
    $adevaLeadYears = $now->diffInYears($adevaFounded);

    return view('index', compact('projects', 'insights', 'conferences', 'adevaLeadYears'));
});
