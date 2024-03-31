const responseMsg = document.getElementById('response');
const Message = document.getElementById('message').value;
const postMessage = document.getElementById('sendbtn');


// postMessage.addEventListener('click', ()=>{

//     if(Message !== ''){
//         var formData = new FormData()
//         formData.append('content', Message)

//         var xhr = new XMLHttpRequest()

//         xhr.open('POST', '/postchat')


//         xhr.onload = ()=>{
//             if (xhr.status === 200) {
//                 console.log(xhr.responseText);
//             } else {
//                 console.error('Erro ao enviar requisição: ' + xhr.status);
//             }
//         }

//         xhr.send(formData)
//     } else {
//         console.error('insira algo...')
//     }
// });

