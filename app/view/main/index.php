<main class="m-container">
    <article class="m-article">
        <div class="m-first-section">
            <h1 class="m-h1">Simple MVC framework</h1>
            <p class="self-s">based on PHP</p>
        </div>


        <section class="m-section">
            <h2>How to use</h2>
            <div class="row-container">
            <div class="description">
                <div class="tabs">
                    <input type="radio" name="tab-btn" id="tab-btn-1" value="" checked>
                    <label for="tab-btn-1">1</label>
                    <input type="radio" name="tab-btn" id="tab-btn-2" value="">
                    <label for="tab-btn-2">2</label>
                    <input type="radio" name="tab-btn" id="tab-btn-3" value="">
                    <label for="tab-btn-3">3</label>
                    <input type="radio" name="tab-btn" id="tab-btn-4" value="">
                    <label for="tab-btn-4">4</label>
                    <div id="content-1">
                        - Создаем маршрут в файле config/routes.php <br>
                        - Маршрут (Url) - точка входа каждой страници, так мы обеспечиваем Status Code: 200 <br>
                        - controller - имя контроллера <br>
                        - action - имя действия <br>
                    </div>
                    <div id="content-2">
                        Создаем контроллер в директории: 
                        app/controllers <br>
                        Название соответствует настройкам config/routes.php
                    </div>
                    <div id="content-3">
                        Создаем модель, при необходимости <br>
                        app/model
                    </div>
                    <div id="content-4">
                        Создаем вид <br>
                        app/view
                    </div>
                </div>
            </div>
            <div class="code-container">
                <img src="/public/img/code_01.PNG" alt="" srcset="">
            </div>
            </div>
        </section>


        <section class="m-section">
            <h2>Some helpers</h2>
            <div class="row-container">
                <div class="description">
                <div class="tabs">
                    <input type="radio" name="tab-btn-1" id="tab-btn-1-1" value="" checked>
                    <label for="tab-btn-1-1">1</label>
                    <input type="radio" name="tab-btn-1" id="tab-btn-1-2" value="">
                    <label for="tab-btn-1-2">2</label>
                    <div id="content-1-1">
                        URL Reactor.<br>
                        Создает semantic friendly Заголовки на странице.<br>
                        настраиватся в config/url_matches.php
                    </div>
                    <div id="content-1-2">
                        Bread Crumbs reactor.<br>
                        Генерирует хлебные крошки на странице.
                    </div>
                </div>
                </div>
                <div class="code-container"></div>
            </div>
        </section>


        <section class="m-section">
            <h3>TODO</h3>
            <div class="description"></div>
        </section>
    </article>
</main>



