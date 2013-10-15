<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Article extends Controller_Template {
 
   const INDEX_PAGE = 'index.php/';
   

    public $template = 'template';


    public function action_index() {
        $articles = ORM::factory('article')->find_all(); // loads all article object from table
 
        $view = new View('article/index'); // load 'article/index.php' view file
        $view->set("articles", $articles); // set "articles" object to view
 
//        $this->response->body($view);
         $this->template->set('content', $view); // renders a view as a response
    }
     
     
    // loads the new article form
    public function action_new() {
        $article = new Model_Article();
         
        $view = new View('article/edit');
        $view->set("article", $article);
         
//        $this->response->body($view);
        $this->template->set('content', $view); 
    }
     
    // edit the article
    public function action_edit() {
        $article_id = $this->request->param('id');
        $article = new Model_Article($article_id);
 
        $view = new View('article/edit');
        $view->set("article", $article);
         
//        $this->response->body($view);
        $this->template->set('content', $view); 
    }
 
    // delete the article
    public function action_delete() {
        $article_id = $this->request->param('id');
        $article = new Model_Article($article_id);
 
        $article->delete();
        $this->redirect('article/index');
    }
     

    public function action_post() {
        $article_id = $this->request->param('id');
        $article = new Model_Article($article_id);
        $article->values($this->request->post()); // populate $article object from $_POST array
        $errors = array();
         
        try {
            $article->save(); // saves article to database
            $this->redirect('article/index');
            
        } catch (ORM_Validation_Exception $ex) {
            $errors = $ex->errors('validation');
        }
         
        $view = new View('article/edit');
        $view->set("article", $article);
        $view->set('errors', $errors);
         
        $this->template->set('content', $view);
    }


    public function action_view() {
        $article_id = $this->request->param('id');
        $article = ORM::factory('article', $article_id);
        $view = new View('article/single');
        $view->set("article", $article);
         
        $this->template->set('content', $view);
    }
}