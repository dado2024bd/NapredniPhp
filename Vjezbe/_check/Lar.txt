Osnovni principi Laravela
Laravel je PHP framework koji koristi MVC (Model-View-Controller) arhitekturu. Omogućuje organiziran, čitljiv i skalabilan kod, olakšava rad s bazom podataka, rutiranje, autentikaciju, autorizaciju i testiranje aplikacija.
Ovi principi i sastavnice čine temelj za razvoj modernih, sigurnih i skalabilnih web aplikacija u Laravelu:
Middleware procedura

Middleware su slojevi koji obrađuju HTTP zahtjeve prije nego što dođu do kontrolera ili nakon što kontroler vrati odgovor. Koriste se za autentikaciju, logiranje, zaštitu od CSRF napada i druge filtere.
Middleware provjerava je li korisnik prijavljen prije nego što može pristupiti profilu:
// app/Http/Middleware/EnsureUserIsSubscribed.php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;

class EnsureUserIsSubscribed
{
    public function handle(Request $request, Closure $next)
    {
        if (! $request->user()->isSubscribed()) {
            return redirect('subscription');
        }
        return $next($request);
    }
}
U ruti:
Route::get('/profile', function () {
    // Samo prijavljeni korisnici mogu pristupiti
})->middleware('auth', 'subscribed');
Kontroler procedura

Kontroleri primaju HTTP zahtjeve, obrađuju ih (npr. dohvaćaju podatke iz baze) i vraćaju odgovore (najčešće prikaze ili JSON). Svaka metoda u kontroleru odgovara na određeni URL ili akciju.
Kontroler dohvaća sve postove iz baze i vraća ih u view:

// app/Http/Controllers/PostController.php
namespace App\Http\Controllers;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }
}
HTTP zahtjevi

HTTP zahtjevi predstavljaju podatke koje korisnik šalje serveru (GET, POST, PUT, DELETE). Laravel koristi Request objekte za pristup podacima iz zahtjeva (npr. input polja, datoteke, zaglavlja).
Primjer dohvaćanja input polja iz POST zahtjeva:
php
public function store(Request $request)
{
    $title = $request->input('title');
    $content = $request->input('content');
    // Daljnja obrada...
}
HTTP odgovori

HTTP odgovori su podaci koje server vraća korisniku. Laravel omogućuje vraćanje prikaza (view), JSON podataka, preusmjeravanja ili datoteka pomoću Response objekta.
Vraćanje JSON odgovora:
public function show(Post $post)
{
    return response()->json($post);
}
Pogledi i URL

Pogledi (views) su Blade predlošci koji generiraju HTML za korisnika. URL-ovi se definiraju u rutama i povezuju s kontrolerima ili funkcijama koje vraćaju odgovarajuće poglede.
Ruta koja vraća view:
Route::get('/about', function () {
    return view('about');
});
U view-u resources/views/about.blade.php:
text
<h1>O nama</h1>
<p>Ovo je stranica o nama.</p>
Front-End

Front-end u Laravelu koristi Blade za generiranje HTML-a, a može se integrirati s alatima poput Vue.js, React ili Alpine.js za dinamičke funkcionalnosti. Asseti (CSS, JS) se upravljaju preko Laravel Mix-a.
Korištenje Blade direktiva za prikaz podataka:
text
// resources/views/users/index.blade.php
@foreach ($users as $user)
    <p>{{ $user->name }}</p>
@endforeach
Sigurnost

Laravel nudi zaštitu od CSRF napada, XSS-a, SQL injectiona, ima ugrađenu autentikaciju i autorizaciju, enkripciju lozinki i validaciju podataka.
Zaštita od CSRF napada:
text
<form method="POST" action="/profile">
    @csrf

    <!-- Ostala polja forme -->
</form>
Baza podataka

Laravel podržava više tipova baza (MySQL, PostgreSQL, SQLite). Konfiguracija se vrši u .env datoteci, a migracije omogućuju verzioniranje i promjene strukture baze.
Primjer migracije za kreiranje tablice posts:
php
// database/migrations/xxxx_xx_xx_create_posts_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
ORM princip

Eloquent ORM omogućuje rad s bazom podataka pomoću PHP objekata i modela, bez potrebe za pisanjem SQL upita. Podržava veze između tablica (one-to-one, one-to-many, many-to-many).
Dohvaćanje svih korisnika iz baze:

use App\Models\User;

$users = User::all();
Testiranje

Laravel ima ugrađenu podršku za testiranje (PHPUnit). Omogućuje pisanje unit testova, integracijskih i funkcionalnih testova za provjeru ispravnosti aplikacije.
Primjer unit testa za provjeru da li se post može kreirati:
// tests/Feature/PostTest.php

namespace Tests\Feature;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    public function test_can_create_post()
    {
        $data = [
            'title' => 'Test post',
            'content' => 'Test content',
        ];
        $response = $this->post('/posts', $data);
        $response->assertStatus(201);
        $this->assertDatabaseHas('posts', $data);
    }
}

___________________________________________________________________________________
1. Što je Laravel i koje su njegove glavne prednosti?
Laravel je PHP framework za razvoj web aplikacija koji koristi MVC arhitekturu. Prednosti su: jednostavan i organiziran kod, ugrađena autentikacija, Eloquent ORM za rad s bazom, jednostavno rutiranje, Blade templating engine, Artisan CLI alat i podrška za testiranje.
2. Objasni MVC arhitekturu u kontekstu Laravela.
Model: upravlja podacima i poslovnom logikom (Eloquent modeli).
View: prikazuje podatke korisniku (Blade predlošci).
Controller: prima zahtjeve, koristi modele i vraća odgovarajuće prikaze.
3. Kako funkcionira Eloquent ORM? Navedi primjer veze one-to-many.
Eloquent omogućuje rad s bazom podataka kroz PHP objekte.
Primjer one-to-many veze:
Jedan korisnik (User) može imati više postova (Post):
// U User modelu:
public function posts() {
    return $this->hasMany(Post::class);
}
4. Kako se koristi Blade templating engine za kreiranje dinamičkih stranica?
Blade omogućuje jednostavno ubacivanje PHP koda u HTML s čistom sintaksom:

@foreach($posts as $post)
    <h2>{{ $post->title }}</h2>
@endforeach
5. Što su middleware i kako ih koristiš u aplikaciji?
Middleware su filteri koji obrađuju HTTP zahtjeve, npr. za provjeru prijave korisnika. Dodaju se rutama:
Route::get('/profile', [ProfileController::class, 'show'])->middleware('auth');
6. Kako implementirati autentikaciju u Laravelu?
Laravel ima ugrađene pakete za autentikaciju (npr. Breeze, Jetstream) koji omogućuju login, registraciju i reset lozinke.
7. Koja je razlika između get() i first() metoda u Eloquentu?
get() vraća kolekciju svih rezultata.
first() vraća samo prvi rezultat ili null ako nema rezultata.
8. Objasni kako funkcioniraju migracije u Laravelu.
Migracije su PHP skripte koje upravljaju strukturom baze podataka (kreiranje i izmjena tablica). Pokreću se naredbom php artisan migrate.
9. Kako Laravel štiti aplikaciju od CSRF napada?
Laravel automatski dodaje CSRF token u HTML forme i provjerava ga kod svakog POST zahtjeva kako bi spriječio neovlaštene napade.
10. Kako koristiš Artisan komande za ubrzavanje razvoja?
Artisan je komandna linija za generiranje koda (modeli, kontroleri, migracije), pokretanje migracija i druge zadatke.
Primjer: php artisan make:controller PostController
11. Kako Laravel upravlja sesijama?
Laravel koristi različite "session drivers" (npr. file, cookie, database, Redis) za pohranu podataka sesije. Sesije se mogu konfigurirati u datoteci config/session.php.
12. Što je Service Container u Laravelu?
Service Container je alat za upravljanje ovisnostima i rješavanje klasa. Omogućuje jednostavno ubrizgavanje ovisnosti u kontrolere ili druge dijelove aplikacije.
13. Kako radi Dependency Injection u Laravelu?
Dependency Injection omogućuje automatsko "ubrizgavanje" potrebnih klasa ili servisa u kontrolere ili metode pomoću Service Containera.
14. Što je Event Broadcasting u Laravelu?
Event Broadcasting omogućuje slanje događaja s poslužitelja prema klijentu u stvarnom vremenu, koristeći alate poput Pusher-a ili Laravel Echo-a.
15. Kako implementirati Queues u Laravelu?
Queues omogućuju izvođenje zadataka u pozadini (npr. slanje e-pošte). Konfiguriraju se u config/queue.php, a Artisan komanda php artisan queue:work pokreće radnike.
16. Što su View Composers?
View Composers su klase ili funkcije koje automatski dijele podatke s određenim view-ovima svaki put kada se učitaju.
17. Kako radi Cache u Laravelu?
Laravel podržava različite cache sustave (npr. file, database, Redis). Podaci se pohranjuju i dohvaćaju pomoću metoda poput Cache::put() i Cache::get().
18. Što su Contracts u Laravelu?
Contracts su skup PHP sučelja koja definiraju osnovnu funkcionalnost servisa koje Laravel pruža (npr. Cache, Queue, Mail).
19. Kako kreirati Custom Artisan Command?
Custom Artisan naredba se kreira pomoću:
bash:
artisan make:command CommandName
Zatim se implementira logika unutar metode handle().
20. Što je Soft Delete i kako ga koristiti?
Soft Delete omogućuje "brisanje" zapisa bez fizičkog uklanjanja iz baze podataka. Dodaje se deleted_at stupac, a model koristi SoftDeletes trait:
use Illuminate\Database\Eloquent\SoftDeletes;
Osnovni koncepti u Laravelu
1. Šta je Laravel?
Laravel je open-source PHP framework koji koristi arhitekturu Model-View-Controller (MVC) za organizaciju koda. Omogućava jednostavnije upravljanje rutiranjem, sesijama, keširanjem i autentifikacijom
MVC arhitektura
Model: Predstavlja podatke i poslovnu logiku (koristi Eloquent ORM).
View: Predstavlja korisnički interfejs (koristi Blade templating engine).
Controller: Povezuje Model i View, obrađuje korisničke zahtjeve i vraća odgovore

Routing
Definira URL-ove aplikacije i logiku koja se izvršava kada se ti URL-ovi posjete. Primjer:

	Route::get('/home', [HomeController::class, 'index']);
Podržava grupiranje ruta, imenovane rute i middleware

Eloquent ORM
Eloquent omogućava rad sa bazama podataka koristeći PHP modele umjesto SQL upita. Podržava veze poput one-to-one, one-to-many i many-to-many
Blade templating engine
Blade omogućava kreiranje dinamičkih HTML stranica sa ugrađenim petljama i uvijetima pomoću jednostavne sintakse:
@if($user)
    Welcome, {{ $user->name }}
@endif

Middleware
Middleware funkcionira kao filter za HTTP zahteve, na primer za provjeru autentifikacije ili logiranje aktivnosti

Autentifikacija i autorizacija
Laravel nudi ugrađene funkcionalnosti za login, registraciju i resetiranje lozinke. Također podržava API autentifikaciju pomoću paketa poput Laravel Passport-a

Validacija podataka
Validacija osigurava da korisnički unos zadovoljava određena pravila prije nego što se obradi ili sačuva:

$request->validate([
    'email' => 'required|email',
    'password' => 'required|min:8',
]);
Artisan CLI
Artisan je komandna linija u Laravelu koja omogućava kreiranje modela, kontrolera, migracija itd.:
bash
php artisan make:model Post --migration
Migracije
Migracije služe kao verzioniranje baze podataka, omogućavajući lako kreiranje ili izmjenu tablica:
php
Schema::create('posts', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->timestamps();
});
