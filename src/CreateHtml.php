<?php
  class CreateHtml {
    function thead() {
      $html = "";
      $html .= "<thead>";
      $html .= "  <tr>";
      $html .= "    <th scope='col'>id</th>";
      $html .= "    <th scope='col'>content</th>";
      $html .= "    <th scope='col'>delete</th>";
      $html .= "  </tr>";
      $html .= "</thead>";

      return $html;
    }
    function tbodyInner($array) {
      $html = "";
      foreach($array as $ar) {
        $html .= "<tr>";
        $html .= "<th scope='row'>" . $ar['id'] . "</th>";
        $html .= "<td>" . $ar['content'] . "</td>";
        $html .= "<td>";
        $html .= "  <form name='deleteForm' action='delete.php' method='POST'>";
        $html .= "    <input name='id' type='hidden' value=" . $ar['id'] . "/>";
        $html .= "    <input type='submit' class='btn btn-danger' value='delete'/>";
        $html .= "  </form>";
        $html .= "</tr>";
      }

      return $html;
    }
    function inputArea(){
      $html = "";
      $html .= '<form name="addForm" action="create.php" method="POST">';
      $html .= '<div class="input-group mb-3">';
      $html .= '  <input type="text" name="record" class="form-control" placeholder="何か入力してください"/>';
      $html .= '  <div class="input-group-append">';
      $html .= '    <input type="submit" class="btn btn-outline-secondary" type="button" id="button-addon2" value="add"/>';
      $html .= '  </div>';
      $html .= '</div>';
      $html .= '</form>';

      return $html;
    }
  }
?>