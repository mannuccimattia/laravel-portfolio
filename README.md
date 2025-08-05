
# EX - Setup Laravel Portfolio

### Descrizione

*Nome repo:* `laravel-portfolio`

Questo esercizio inizia oggi e lo continueremo fino alla fine del corso per creare passo dopo passo il nostro portfolio online!

### Svolgimento

Per oggi, dedichiamoci alla creazione del nostro portfolio, mettendo su un'app Laravel provvista di autenticazione grazie a Breeze.

1. Avviamo l'installazione di Laravel
1. Installiamo Breeze e Bootstrap
1. Verifichiamo che l'autenticazione funzioni
1. Creiamo un layout per la nostra area admin

<br>

# EX - CRUD Progetti (parte 1)

### Descrizione

Ora inseriamo la nostra prima entità: il Progetto.  

### Svolgimento

L'obiettivo di oggi è quello di iniziare a preparare il back-office per poter gestire i progetti nel nostro sito portfolio

- Creiamo il modello Project, con relativa migrazione ed un seeder per inserire inizialmente alcuni progetti nel Database

- Prepariamo un Resource Controller (Admin/ProjectController) incaricato di gestire tutte le operazioni CRUD sui progetti. 

Soffermiamoci per oggi solo sulla logica delle azioni di index e show. 

- Creiamo le rotte per i nostri progetti e prepariamo un layout per mostrare i nostri progetti in tabella nella rotta index. Inventiamo anche uno stile per la pagina di show, che dovrà mostrare un singolo progetto. 

<br>

# EX - CRUD Progetto (parte 2)

### Descrizione

Oggi termineremo le operazioni CRUD sui progetti, dando la possibilità all'utente di creare nuovi progetti, modificare quelli esistenti o eliminarli.

### Svolgimento

Procediamo al completamento delle operazioni CRUD sul modello Project:

- Prepariamo le rotte per le pagine di creazione e modifica dei progetti

- All'interno delle pagine, prepariamo i rispettivi form

- Nella pagina di dettaglio del progetto, mostriamo il Type a cui il progetto appartiene. Volendo, potremmo anche aggiungere una colonna che indica il tipo nella tabella della pagina Index dei progetti.

- Nel controller, inseriamo la logica per il salvataggio di un nuovo progetto, per la sua modifica e per l'eliminazione

- Nella tabella della pagina index, dovremo inserire i pulsanti su ciascuna riga, per permettere l'eliminazione e la modifica del singolo progetto. Inoltre, potremmo avere un singolo tasto in cima che ci porti alla pagina di creazione del progetto.

### Bonus

Proviamo ad aggiungere un controllo: quando l'utente clicca sul pulsante "delete", chiediamo conferma della cancellazione, prima di eliminare l'elemento. Questa operazione possiamo farla a mano con JavaScript o aiutarci con i componenti Bootstrap.

<br>

# EX - Aggiungiamo il Type

### Descrizione

Continuiamo a lavorare sul nostro sito portfolio e aggiungiamo una nuova entità Type. Questa entità rappresenta la tipologia di un progetto ed è in relazione one to many con i progetti.

### Svolgimento

I task da svolgere sono diversi, ma alcuni di essi sono un ripasso di ciò che abbiamo fatto nelle lezioni dei giorni scorsi: 

- Creiamo il modello Type, con relativa migrazione ed un seeder per inserire i types nel Database

- Creiamo anche la migration per modificare la tabella projects, che dovrà ora contenere la chiave esterna type_id

- Nei modelli Type e Project, aggiungiamo i metodi per definire la relazione one-to-many

- Nella pagina di dettaglio del progetto, mostriamo il Type a cui il progetto appartiene. Volendo, potremmo anche aggiungere una colonna che indica il tipo nella tabella della pagina Index dei progetti.

- Nei form di creazione e modifica dei progetti, dobbiamo permettere di associare un type al progetto stesso. Gestiamo inoltre il salvataggio di questa associazione progetto-tipologia nel controller ProjectController

### Bonus

Aggiungere le operazioni CRUD anche per il model Type, in modo da gestire le tipologie di progetto direttamente dal pannello di amministrazione.

<br>