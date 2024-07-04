<html lang="en">
  <head>
    <title>Substation Automation Systems list</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>
  <body>
    <div class=center-div >
      <h1>Systems</h1>
      <table>
        <tr>
          <th>SAS Name</th>
          <th>Vendor</th>
          <th>Supported OS</th>
          <th>User raiting</th>
        </tr>
        <?php
          $mysqli = new mysqli("db-server", "user", "password", "SAS_db");
          if ($mysqli->connect_error) {
            die("Connection error: " . $mysqli->connect_error);
          }
          $result = $mysqli->query("SELECT * FROM systems");
          foreach ($result as $row) {
            echo "
            <tr>
              <td>{$row['sas_name']}</td>
              <td>{$row['vendor_name']}</td>
              <td>{$row['supported_os']}</td>
              <td>{$row['rating']}</td>
            </tr>
            ";
          } ?>
      </table>
    </div>
    <?php
			phpinfo();
		?>
  </body>
</html>
<style>
  .center-div
  {
    width: 935px;
    margin: auto;
  }
</style>