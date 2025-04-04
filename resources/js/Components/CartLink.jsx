import { CartContext } from "@/Context/Cart"
import { useContext } from "react"
import { Link } from "@inertiajs/react";
export default function CartLink() {
    const { cart } = useContext(CartContext);
    const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
    console.log("Carrito actual:", cart);
    cart.forEach(item => console.log(`ID: ${item.id}, Cantidad: ${item.quantity}`));
    console.log(totalItems);
    return (
        <Link href="/cart">
            <span className="absolute -inset-1.5" />
            <span className="sr-only">View my products</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
                <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
            </svg>
            {totalItems > 0 && (
                <span className="relative top-0 text-white bg-red-500 rounded-full">
                    {totalItems}
                </span>
            )}
        </Link>
        
    )
}