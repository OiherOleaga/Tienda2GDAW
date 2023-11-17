const express = require('express');
const stripe = require('stripe')('sk_test_51OCgtvChmahqYUkzGtO0dKD8kN83niHg2NujwwX4N6GNQ2ejdngwYCFrx4fEc7ZB5E9wMkeJo7tm2GvVjjTnC8eD00QdR2W7Zi');

const app = express();
const PORT = 3000;

app.use(express.static('public'));
app.use(express.json());

app.post('/crear-sesion-pago', async (req, res) => {
    try {
        const session = await stripe.checkout.sessions.create({
            payment_method_types: ['card'],
            line_items: [{
                price_data: {
                    currency: 'usd',
                    product_data: {
                        name: 'Computadora bien chingona',
                    },
                    unit_amount: 1599,
                },
                quantity: 1,
            }],
            mode: 'payment',
            success_url: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrDQtReQ0XXeepJ_aCQyBHwnmH4EVQJQbcIA&usqp=CAU',
            cancel_url: 'https://www.eltiempo.com/files/image_640_428/uploads/2023/01/22/63cd92bbe1d6a.jpeg',
        });

        res.json({ id: session.id });
    } catch (error) {
        console.error('Error al crear sesión de pago:', error);
        res.status(500).json({ error: 'Error al crear sesión de pago' });
    }
});

app.listen(PORT, () => {
    console.log(`Servidor en ejecución en http://localhost:${PORT}`);
});
