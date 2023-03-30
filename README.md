# Simple example MVC pattern
## Based on php
___

Простая реализация **MVC** Архитектуры на **PHP**.

**How to use:**
1. Create route in `config\routes.php`
```php
'blog'=>[
    'controller' => 'blog',
    'action' => 'index'
],
'post'=>[
    'controller' => 'blog',
    'action' => 'show'
]
```
2. Create `Name_controller.php` in `app\controllers`
```php
namespace app\controllers;
use core\Controller;

class Blog_Controller extends Controller
{

    public function index_action(){
        $this->view->render('index');
    } 

    public function show_action(){
        $data = $this->model->get_posts();
        $vars = [
            'posts'=> $data
        ];
        $this->view->render('show', $vars);
    }
    
}
```
3. Create Model, if need `app\model\Name_model.php`

```php
namespace app\model;
use core\Model;

class Blog_model extends Model {

    public function get_posts(){
        $result = $this->db->row('SELECT title, content FROM posts');
        return $result;
    }
    
}
```
4. Create View in `app\view`.
      - view
        - blog
          - `index.php` 
          - `show.php`  


