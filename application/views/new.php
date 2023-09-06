<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>hello</h1>

</body>
<script>

  const searchQuery = 'SEARCH_QUERY';
  const url = `https://api.iconbolt.com/search?q=${encodeURIComponent(searchQuery)}`;

  fetch(url,{
    method:'GET',
    mode: 'no-cors',
  })
    .then(response => response.json())
    .then(data => {
      console.log(data)
    })
    .catch(error => {
      console.error(error)
    });

  fetch('https://jsonplaceholder.typicode.com/todos/1')
    .then(response => response.json())
    .then(json=>console.log(json))



  const search = 'SEARCH_QUERY';
  const url = `https://api.iconbolt.com/search?q=${encodeURIComponent(search)}`;

  fetch(url, {
    method: 'GET',
    mode: 'no-cors'
  })
    .then(response => response.json())
    .then(data => {
      console.log(data)
    })
    .catch(error => {
      console.error(error)
    })
 
  async function fetchdata() {
    try {
      const response = await fetch('https://jsonplaceholder.typicode.com/users');
      if (!response.ok) {
        throw new Error('Network Error')
      }
      const data = await response.json();
      console.log('Data : ', data)
    }catch(error){
      console.error('This is a error message')
      console.error('Error:',error)
      console.log('Error:',error)
    }
}

fetchdata();


</script>

</html>