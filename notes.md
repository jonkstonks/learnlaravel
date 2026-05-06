**1. episood** - Jeffrey tutvustus

**2. episood** - PHP, Composer ja Laravel install | laraveliga projekti loomine | kuna ma ei tõmmanud Herd'i, kasutan `php artisan serve` | Welcome view'ga tutvumine

**3. episood** - süntaksi selgitus | about ja contact route loomine

**4. episood** - Layout file lisamine | uute komponentide lisamiseks uus fail views/components kausta | atribuutide ja prop'ide eristamine

**5. episood** - View andmete muutmine | `'person' => request('person', 'vana kere'),` ~ /?person=KuiSiinNimePole, siis default on _vana kere_

**6. episood** - `@dump($tasks)` dump - dumpib array ega mõjuta ülejäänud koodi, `@dd($tasks)` dump&die - dumpib array ning peatab programmi töö | `@if` `@unless` `empty` ja muu selgitus

**7. episood** - Forms | tailwind css | POST request | CSRF (Cross-Site Request Forgery) kaitse: formis ees `@csrf` | sessioonis ideede hoidmine

**8. episood** - andmebaasiga ühendamine | Eloquent (ORM) | Migratsioonid:\
pmst version control andmebaasile - on vaja uut tabelit lisada, tabelisse uut tulpa? `php artisan make:migration` ja `php artisan migrate`.\
`migrate:refresh` teeb rollback'i tervele andmebaasile ning sooritab uuesti kõik migratsioonid. Sisestatud andmed kaovad.\
Migratsioonile panna kirjeldav nimi, nt: _add_status_to_ideas_table_

**9. episood** - views/ideas.blade.php -> views/ideas/index.blade.php | actions: index, create, store, show, edit, UPDATE, delete |kirjete muutmine ja kustutamine | method spoofing

**10. episood** - Controllers | `php artisan make:controller` - ideede jaoks sobis Resource tüüp, sai valida vastava Modeli (Idea) | kulutasin liiga palju aega kassipildi generaatori peale

**11. episood** - Kasutaja sisendi valideerimine error komponendiga

**12. episood** - Form Request genereerimine | Form Request kasutamine Controlleris