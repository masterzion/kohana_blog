<?php 
defined('SYSPATH') or die('No direct script access.');

class Model_Comment extends ORM {
     // contains many to one relation mainly
    protected $_belongs_to = array (
        // a comment is related to only one article
        'article' => array (
            'model'     => 'article',
            'foreign_key'   => 'article_id'
        )
    );
    
    /**
     * Rule definitions for validation
     *
     * @return array
     */
    public function rules() {
        return array (
            'name' => array (
                array('not_empty')
            ),
            'email' => array (
                array('not_empty')
            ),
            'comment' => array (
                array('not_empty')
            ),
            'article_id' => array (
                array('not_empty')
            ),
            'id' => array (
                array('not_empty')
            )
            
        );
    }
        
    
    public function labels() {
        return array(
            'name'        => 'Name',
            'comment'     => 'Comment',
            'email'       => 'Email',
            'article_id'  => '',
            'id'  => '',
        );
    }    
    
}