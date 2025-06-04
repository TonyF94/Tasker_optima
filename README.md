# Laravel Task Management

## Funzionalità
- Creare Progetto  
- Modificare Progetto  
- Eliminare Progetto  
- Creare Attività  
- Modificare Attività  
- Eliminare Attività  
- Ordinamento con Sistema Drag and Drop  
- Aggiornamento Stato  
- Filtrare per Stato  

## Indice
- [Prerequisiti](#prerequisiti)  
- [Installazione](#installazione)  
- [Utilizzo](#utilizzo)  

## Prerequisiti
Prima di iniziare, assicurati di aver soddisfatto i seguenti requisiti:  
- PHP >= 8.2  
- MySQL  
- Composer installato globalmente

##Utilizzo

1. Clona la repository:


2. Vai nella cartella del progetto:

    ```bash
    cd project_folder
    ```

3. Installa le dipendenze PHP:

    ```bash
    composer install
    ```

4. Configura le variabili d’ambiente:

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5. Esegui le migrazioni (opzionale):

    ```bash
    php artisan migrate
    ```

## Utilizzo

Per installare e configurare il progetto in locale, segui questi passaggi:

1. Per avviare l’applicazione, usa il seguente comando:

    ```bash
    php artisan serve
    ```

Visita [http://localhost:8000](http://localhost:8000) nel tuo browser per vedere l’applicazione.
