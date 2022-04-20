## install

1. env.example ni .env qilinadi
2. DB ulanadi
3. Quidagi kammandalari beriladi:

```bash
composer install
```

```bash
php artisan key:generate
```

```bash
php artisan migrate
```

4. Agar seederlar bilan test qilib ko'rmoqchi bo'lsayiz:

```bash
php artisan db:seed
```

5. Rahmat
