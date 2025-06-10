# 📝 Laravel ToDo REST API

**Laravel ToDo API** — это учебный REST API проект, реализованный на Laravel 10 и PHP 8, с использованием Eloquent ORM и SQLite.

Этот проект разработан как часть личной практики для закрепления навыков backend-разработки на PHP, включая:
- проектирование REST API,
- работу с базой данных через Eloquent ORM,
- реализацию CRUD-операций,
- работу с валидацией, роутингом и архитектурой Laravel.

## 🚀 Возможности API

| Метод  | URL               | Описание                       |
|--------|-------------------|--------------------------------|
| GET    | /api/todos        | Получить все задачи            |
| POST   | /api/todos        | Создать новую задачу           |
| GET    | /api/todos/{id}   | Получить задачу по ID          |
| PUT    | /api/todos/{id}   | Обновить задачу по ID          |
| DELETE | /api/todos/{id}   | Удалить задачу по ID           |

## ⚙️ Технологии

- Laravel 10
- PHP 8.1+
- SQLite (локально) или любая поддерживаемая СУБД
- Eloquent ORM
- REST API

## 📂 Структура проекта

- `routes/api.php` — маршруты API
- `app/Models/Todo.php` — модель задачи
- `app/Http/Controllers/Api/TodoController.php` — контроллер для API
- `database/migrations/` — миграции таблицы `todos`

## 🛠 Установка

```bash
git clone https://github.com/FyrL29074/php-Todo-app.git
cd todo-api

composer install
cp .env.example .env

touch database/database.sqlite
php artisan migrate

php artisan serve
```
