
---

# LARAVEL-MIGRATION-SEEDER

## Descrizione

**LARAVEL-MIGRATION-SEEDER** è un progetto che esplora l'uso delle migrazioni, dei seeder e dei model in Laravel. L'obiettivo è creare una tabella `trains` per memorizzare i dati sui treni e implementare la logica per visualizzare i treni in partenza dalla data odierna.

### Funzionalità

1. **Creazione della Tabella Trains**:
   - Creazione di una migrazione per la tabella `trains` con le seguenti colonne:
     - **azienda**: nome dell'azienda ferroviaria.
     - **stazione_di_partenza**: nome della stazione di partenza.
     - **stazione_di_arrivo**: nome della stazione di arrivo.
     - **orario_di_partenza**: orario di partenza del treno.
     - **orario_di_arrivo**: orario di arrivo del treno.
     - **codice_treno**: codice identificativo del treno.
     - **numero_carrozze**: numero di carrozze del treno.
     - **in_orario**: un flag per indicare se il treno è in orario.
     - **cancellato**: un flag per indicare se il treno è stato cancellato.
     - Eventuali altre colonne necessarie per il corretto funzionamento della tabella.

2. **Popolamento Iniziale dei Dati**:
   - Inserimento dei dati nella tabella tramite PhpMyAdmin (opzionale o iniziale).

3. **Creazione del Model Train**:
   - Creazione di un model **Train** tramite il comando `php artisan make:model Train`, che rappresenta la tabella `trains` nel database.

4. **Creazione del Controller**:
   - Creazione di un controller **TrainController** con il comando `php artisan make:controller TrainController`.
   - Implementazione della funzione `index()` all'interno del controller per recuperare tutti i treni in partenza dalla data odierna.

5. **Visualizzazione dei Dati**:
   - Creazione di una view che mostri i treni in partenza dalla data odierna, visualizzando i dati come **azienda**, **stazione di partenza**, **orario di partenza**, e **codice treno**.

### Bonus (Facoltativo)

1. **Seeder**:
   - Creazione di un seeder per popolare la tabella `trains` con dati di esempio, in modo da facilitare i test.

2. **Filtraggio dei Treni**:
   - Aggiunta della funzionalità per filtrare i treni in partenza da una stazione specifica o che arrivano in una stazione specifica.

### Struttura del Progetto

1. **app/Models/Train.php**: Il model **Train** che rappresenta la tabella `trains` nel database.
2. **app/Http/Controllers/TrainController.php**: Il controller che gestisce la logica per la visualizzazione dei treni in partenza dalla data odierna.
3. **database/migrations/XXXX_XX_XX_create_trains_table.php**: La migrazione per la creazione della tabella `trains`.
4. **resources/views/trains.blade.php**: La view per visualizzare i treni in partenza dalla data odierna.
5. **routes/web.php**: La rotta che collega la pagina della home con la funzione del controller.

### Tecnologie utilizzate

- **Laravel**: Framework PHP per lo sviluppo del progetto.
- **Eloquent ORM**: Il sistema di ORM di Laravel utilizzato per interagire con il database.
- **Blade**: Motore di templating di Laravel per la gestione delle views.
- **MySQL**: Sistema di gestione del database per memorizzare i dati dei treni.

---
