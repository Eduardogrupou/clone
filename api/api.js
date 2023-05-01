 const getPerfumes  = async ()  => {





 const options = {method: 'GET'};

await fetch('http://localhost:3000/api/product', options)
  .then(response => response.json())
  .then(response => {
      console.log(response)
      return response.slice(0,20)
      
      
  })
  .catch(err => console.error(err));
  
}