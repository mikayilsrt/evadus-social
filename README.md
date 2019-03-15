# EVADUS SOCIAL

🌐 A simple social network developed with **Laravel** and **ReactJS**.

## 📕 Getting Started

```
git clone https://github.com/mikayilsrt/evadus-social.git
composer install
```

## Copy the **.env.dev** and rename in **.env** and change the db informations.

```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=dbname
DB_USERNAME=root
DB_PASSWORD=root
```
## 🎉 And run this command to start the project.
```
php artisan key:generate
php artisan migrate
php artisan serve
```

## 📚 conceptual model of data
Diagram of table structure (conceptual data model)

![EVADUS SOCIAL](https://i.ibb.co/Jn5pzb6/mcd-evadus-social.png)

## 📖 License
MIT License

Copyright (c) 2019 [Mikayil S](https://github.com/mikayilsrt).

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
