window.onload = () => {
    // variables
    let stripe = Stripe('pk_test_51HmHUZKxldL9XsGAmMltKVRksYjinwLli2Xniop3IcUggn7kuMdkce1R9K4PhI6r8CrPqD6H7AQdN2bzijMiA27c00mKT3gMrf');
    // déclarer les éléments de cartes     pk_live_51HmHUZKxldL9XsGA39ZlWbC0Cfm3flUC40LvQBwdo1MHMUsF7jczHmfqLRksnwxoD0qyRrtDazJl43qcnpbBCFYq002z5dYUtq
    let elements = stripe.elements();
    let redirect = "shop.php"; // si jamais le paiement est un succès, nous on va mettre sur une commande/résultat/récapitulif 
    //style css

    // objets éléments de la page
    let cardAdress = document.getElementById("card-adress");
    let cardEmail = document.getElementById("card-email") ;
    let cardHolderName = document.getElementById("cardholder-name");
    let cardButton = document.getElementById("card-button");
    let clientSecret = cardButton.dataset.secret;

    // créer les éléments du formulaire de carte bancaire
    let card = elements.create("card");
    card.mount("#card-elements");

    // on gère la saisie des informations entrés

    card.addEventListener("change", (event)=>{
        let displayError = document.getElementById("card-errors");
        if(event.error){
            displayError.textContent = event.error.message;
        }else{
            displayError.textContent = "";
            
        }
    })

    // On gère le paiement

    cardButton.addEventListener("click",() =>{
        stripe.handleCardPayment(
            clientSecret,card,{
                payment_method_data:{
                    billing_details : {name: cardHolderName.value , email :cardEmail.value , address: cardAdress.value }
                }
            }
        ).then((result) => {
            if(result.error){
                document.getElementById("errors").innerText = result.error.message
            }else{
                document.location.href = redirect;
            }
        })
    })



}

