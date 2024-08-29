// document.addEventListener("DOMContentLoaded", function() {
//     // Link 1: Cadastra uma ação no banco de dados sem refresh
//     document.getElementById("registerActionLink").addEventListener("click", function(event) {
//         event.preventDefault(); // Impede o comportamento padrão do link
        
//         // Envia uma requisição AJAX para o servidor
//         fetch('register_action.php', {
//             method: 'POST'
//         })
//         .then(response => response.text())
//         .then(data => {
//             alert("Ação cadastrada com sucesso!"); // Notifica o usuário
//             console.log(data); // Log da resposta do servidor
//         })
//         .catch(error => {
//             console.error("Erro ao cadastrar ação:", error);
//         });
//     });

//     // Link 2: Abre um pop-up de cadastro
//     document.getElementById("openPopupLink").addEventListener("click", function(event) {
//         event.preventDefault(); // Impede o comportamento padrão do link
        
//         // Exibe o pop-up de cadastro
//         document.getElementById("popup").style.display = 'block';
//     });

//     // Envia o formulário de cadastro via AJAX
//     document.getElementById("registerForm").addEventListener("submit", function(event) {
//         event.preventDefault(); // Impede o envio padrão do formulário

//         const formData = new FormData(this);

//         // Envia os dados do formulário para o servidor
//         fetch('register_user.php', {
//             method: 'POST',
//             body: formData
//         })
//         .then(response => response.text())
//         .then(data => {
//             alert("Cadastro realizado com sucesso!"); // Notifica o usuário
//             console.log(data); // Log da resposta do servidor

//             // Oculta o pop-up após o cadastro
//             document.getElementById("popup").style.display = 'none';
//         })
//         .catch(error => {
//             console.error("Erro ao cadastrar:", error);
//         });
//     });
// });


document.addEventListener("DOMContentLoaded", function() {
    // Link 1: Cadastra uma ação no banco de dados sem refresh
    document.getElementById("registerActionLink").addEventListener("click", function(event) {
        event.preventDefault(); // Impede o comportamento padrão do link
        
        // Envia uma requisição AJAX para o servidor
        fetch('register_action.php', {
            method: 'POST'
        })
        .then(response => response.text())
        .then(data => {
            alert("Ação cadastrada com sucesso!"); // Notifica o usuário
            console.log(data); // Log da resposta do servidor
        })
        .catch(error => {
            console.error("Erro ao cadastrar ação:", error);
        });
    });

    // Link 2: Abre um pop-up de cadastro
    document.getElementById("openPopupLink").addEventListener("click", function(event) {
        event.preventDefault(); // Impede o comportamento padrão do link
        
        // Exibe o pop-up de cadastro
        document.getElementById("popup").style.display = 'flex';
    });

    // Fechar o pop-up ao clicar no botão de fechar
    document.getElementById("closePopup").addEventListener("click", function() {
        document.getElementById("popup").style.display = 'none';
    });

    // Envia o formulário de cadastro via AJAX
    document.getElementById("registerForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Impede o envio padrão do formulário

        const formData = new FormData(this);

        // Envia os dados do formulário para o servidor
        fetch('register_user.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert("Cadastro realizado com sucesso!"); // Notifica o usuário
            console.log(data); // Log da resposta do servidor

            // Oculta o pop-up após o cadastro
            document.getElementById("popup").style.display = 'none';
        })
        .catch(error => {
            console.error("Erro ao cadastrar:", error);
        });
    });
});
