# Database Connection Using PDO in PHP

## For Database Connection

 `$conn = new PDO("mysql:host=hostname;dbname=dbname, username, password);`

## Prepare Statement for Query

`$statement = $connect->prepare($query);`

## Excute Query 

`$statement->execute($data);`

## Count Row

`$total_row = $statement->rowCount();`

## Fetch Row

`$result = $statement->fetch(PDO::FETCH_ASSOC);`