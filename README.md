# ESERCIZIO: Trains

> [!NOTE]
>
> nome repo: laravel-migration-seeder

### Descrizione:

- Creiamo una tabella `trains` e relativa `Migration`.

Ogni treno dovrà avere:
1. Azienda;
2. Stazione di partenza;
3. Stazione di arrivo;
4. Orario di partenza;
5. Orario di arrivo;
6. Codice Treno;
7. Numero Carrozze;
8. In orario;
9. Cancellato.

È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto.
Inserite inizialmente i dati tramite **PhpMyAdmin**.
Create `Model` relativo ed un `Controller` per mostrare nella home page tutti i treni che sono in partenza dalla data odierna.

#### Continuazione esercizio:
• fate una revisione del vostro codice con quanto visto questa mattina a lezione;
• create un seeder per popolare la vostra tabella con almeno 50 treni utilizzando Faker.

#### Bonus:
utilizzando lo stesso layout, provate a creare una pagina di dettaglio del treno, raggiungibile cliccando sulla card nell'elenco dei treni in partenza.


public function up(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->time('departure_time')->after('time_of_departure')->nullable();
            $table->time('arrival_time')->after('arrival_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table -> dropColumn('departure_time');
            $table -> dropColumn('arrival_time');
        });
    }