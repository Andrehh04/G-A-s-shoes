# G&A's Shoes 👟 - E-commerce Platform

**G&A's Shoes** è una piattaforma e-commerce completa dedicata alla vendita di calzature. Il progetto simula l'intera esperienza di acquisto, dalla navigazione del catalogo fino alla gestione degli ordini e del magazzino.

## 🚀 Funzionalità Principali

### Lato Utente (Customer)
* **Homepage Dinamica:** Visualizzazione dei prodotti in evidenza.
* **Filtraggio per Brand:** Navigazione intuitiva tramite i loghi delle marche per visualizzare solo le scarpe di uno specifico produttore.
* **Sistema di Carrello:** Gestione dei prodotti pronti per l'acquisto.
* **Lista dei Preferiti:** Possibilità di salvare i prodotti desiderati per un accesso rapido.
* **Autenticazione:** Pagina di Login e registrazione per gestire il profilo utente.
* **Storico Ordini:** Sezione dedicata per visualizzare tutti gli ordini effettuati e la relativa data d'acquisto.
* **Checkout Simulata:** Form di pagamento realistico (simulazione) per inserimento dati carta di credito.

### Lato Amministratore (Admin)
* **Dashboard Gestione Prodotti:** Area riservata per il controllo dell'inventario.
* **Gestione Catalogo:** Funzionalità per aggiungere nuovi modelli di scarpe o rimuovere prodotti non più disponibili.

## 🛠️ Tecnologie Utilizzate

Il progetto è stato sviluppato utilizzando le seguenti tecnologie:

* **Frontend:** HTML5, CSS3, [Bootstrap 5](https://getbootstrap.com/) per un layout responsive e moderno.
* **Interattività:** JavaScript per la gestione dinamica del carrello e validazioni lato client.
* **Backend:** PHP per la logica lato server e la gestione delle sessioni utente.
* **Database:** MySQL per la memorizzazione di utenti, prodotti e ordini.

## 💳 Nota sulla Simulazione di Pagamento
Il processo di checkout presente nel sito è a scopo puramente dimostrativo. Il form di inserimento dati della carta di credito non effettua transazioni reali e non è collegato a gateway di pagamento esterni. Serve a illustrare il flusso d'acquisto completo dal punto di vista dell'interfaccia utente (UI/UX).

## 📦 Installazione e Configurazione

1.  **Clona il repository:**
    ```bash
    git clone [https://github.com/TUO-USERNAME/GA-Shoes.git](https://github.com/TUO-USERNAME/GA-Shoes.git)
    ```
2.  **Configurazione Database:**
    * Importa il database tramite phpMyAdmin (file `.sql` incluso nella cartella).
    * Verifica i parametri di connessione nel file PHP dedicato (es. `config.php` o `db_connect.php`).
3.  **Ambiente Locale:**
    * Copia la cartella del progetto in `htdocs` se utilizzi XAMPP.
    * Avvia i servizi Apache e MySQL.
    * Accedi al sito tramite `http://localhost/GA-Shoes`.

---
*Progetto realizzato come esercitazione pratica per lo sviluppo di applicazioni web dinamiche.*
