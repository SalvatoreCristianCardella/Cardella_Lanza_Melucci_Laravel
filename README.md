1. Dal terminale si crea nuovo progetto laravel con il comando laravel new nomeProgetto
2. Si entra nella cartella creata e si lancia il comando composer
3. Dopo aver aperto vscode da terminale si lancia il comando npm install
4. dopo si lancia npm i bootstrap
5. poi lancia l'ultimo npm run dev
6. importare il percorso @import 'bootstrap/dist/css/bootstrap.min.css'; sul file app.css
7. importare il percorso import './bootstrap'; e il percorso import 'bootstrap/dist/js/bootstrap.min.js'; sul file app.js
8. si crea la cartella components con dentro i file layout.blade.php e gli altri componenti che ci servono
9. dentro il file layout nella sezione head va inserita questa riga  @vite(['resources/css/app.css' , 'resources/js/app.js'])
10. dentro il file layout dopo aver inserito la navbar e il footer, tra questi due elementi va inserito un div con dentro lo slot es. 
<div>
    {{$slot}}
</div>



