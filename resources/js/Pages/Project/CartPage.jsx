import { useContext } from "react";
import { CartContext } from "@/Context/Cart";
export default function CartPage() {
    const { cart, addCart, deleteCart, clearCart } = useContext(CartContext);

    const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
    const totalPrice = cart.reduce((total, item) => total + item.quantity * item.price, 0);
    return (
        <div>
            {totalItems > 0 && cart.map((item) => (
                <div key={item.id}>
                    <span>- Articulo: {item.name} - Precio: {((item.price) * item.quantity).toFixed(2)} - Cantidad {item.quantity}   </span>
                    <button onClick={addCart} class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                        Añadir al carrito
                    </button>
                    <button onClick={deleteCart} class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                        Reducir carrito
                    </button>
                    <button onClick={deleteCart} class="bg-red-700 hover:bg-red-900 text-white font-bold py-2 px-4 rounded-full">
                        Limpiar carrito
                    </button>
                    <br />
                </div>
            ))}
            {totalItems > 0 && (
                <span>Numero de articulos: {totalItems} - Precio total:  {totalPrice}</span>
            )}
        </div>
    )
}