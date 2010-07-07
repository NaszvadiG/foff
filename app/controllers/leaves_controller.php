<?php 
class LeavesController extends AppController {
  var $name = 'Leaves';

  /* For the logged in user, this shows all the leaves of him  */
  /* For the admin, it shows the leaves by users  */
  function index() {
    $this->set('leaves', $this->Leave->find('all'));
  }
}
?>
