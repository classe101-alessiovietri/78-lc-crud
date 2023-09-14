# Come avviare e sviluppare un progetto in Laravel

## Passi post-clone di una repo di Laravel
1. Clono la repo del nuovo esercizio (che probabilmente è la copia del template)
2. Copio il file .env.example e lo rinomino in .env (senza cancellare il file .env.example)
3. Apro il terminale ed eseguo il comando composer install
4. Dopo l'esecuzione di composer install, eseguo nel terminale il comando php artisan key:generate
5. Dopo l'esecuzione di php artisan key:generate, eseguo nel terminale il comando npm i
6. Dopo l'esecuzione di npm i:
    a. O avvio npm run dev
    b. Oppure eseguo il comando npm run build
7. Se ne ho bisogno (MOLTO probabilmente si), collego il database modificando il file .env
8. Avvio (se ho avviato npm run dev -> lo faccio in un altro terminale) il comando php artisan serve

## Come aggiungere un'entità (e relativa CRUD) -> es. pasta, libri, macchine...
0. **N.B. l'entità User è già implementata in Laravel**
1. Creo una migration tramite il comando **php artisan make:migration create_NOMETABELLA_table** (es. create_pastas_table)
2. Riempio la migration con le colonne necessarie
3. Eseguo la migration tramite il comando **php artisan migrate**
4. Creo il model associato alla mia entità tramite il comando **php artisan make:model NOMEENTITA** (es. Pasta)
5. Creo il seeder associato alla mia entità tramite il comando **php artisan make:seeder NOMEENTITASeeder** (es. PastaSeeder)
6. Riempio il seeder con le operazioni necessarie a creare i salvare i miei dati iniziali (quelli reali)/di test (quelli fake)
7. Eseguo il seeder con il comando **php artisan db:seed --class=NOMEENTITASeeder**

## Passi workflow di Git
