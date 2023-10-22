import ApplicationLogo from '@/Components/ApplicationLogo';
import { Link } from '@inertiajs/react';

export default function Header() {
    return (
        <header className="flex flex-col items-start sm:items-center my-5 mx-5 sm:mx-0">
            <Link href={route('category.index')}>
                <ApplicationLogo small={false}/>
            </Link>
            <div id="burger" className="z-20 lg:hidden absolute flex flex-col py-2 items-center justify-around right-5 sm:right-12 top-10 w-16 h-14 bg-black rounded-xl shadow-neubrutal hover:shadow-h-neubrutal ease-in duration-100 cursor-pointer">
                <div className="bg-white h-1.5 w-10"></div>
                <div className="bg-white h-1.5 w-10"></div>
                <div className="bg-white h-1.5 w-10"></div>
            </div>
            <div className="hidden lg:flex items-center justify-between w-full border-t-[3px] border-b-[3px] border-black lg:px-24 bg-white">
                <div className="flex">
                    <a href={route('advertisement.create')} className="text-black underline decoration-transparent hover:decoration-black ease-in duration-100 font-clash-reg text-clamp-2xl mr-12">Iesniegt sludinājumu</a>
                    <a href="" className="text-black underline decoration-transparent hover:decoration-black ease-in duration-100 font-clash-reg text-clamp-2xl mr-12">Mani sludinājumi</a>
                    <a href="" className="text-black underline decoration-transparent hover:decoration-black ease-in duration-100 font-clash-reg text-clamp-2xl mr-12">Meklēšana</a>
                    <a href="" className="text-black underline decoration-transparent hover:decoration-black ease-in duration-100 font-clash-reg text-clamp-2xl mr-12">Memo</a>
                </div>
                <div className="flex">
                    <a href={route('login')} className="flex bg-black items-center justify-center w-56 h-24 text-white font-clash-reg text-clamp-2xl">Login</a>
                </div>
            </div>
            <div id="menu" className="lg:hidden absolute top-0 right-0 flex h-[100dvh] w-[100vw] justify-end translate-x-full z-10 ease-in-out duration-100 backdrop-blur-sm">
                <div className="flex flex-col w-[100%] sm:w-[75%] bg-secondary border-l-[3px] border-black p-10">
                    <a href={route('login')} className="flex text-white font-clash-reg text-clamp-4xl h-14 w-[36vw] sm:w-40 bg-black rounded-xl items-center justify-center shadow-neubrutal hover:shadow-h-neubrutal ease-in duration-100">
                        Login
                    </a>
                    <a href={route('advertisement.create')} className="mt-[12dvh] text-black font-clash-reg text-clamp-4xl mb-[4dvh]">Iesniegt sludinājumu</a>
                    <a href="" className="text-black font-clash-reg text-clamp-4xl mb-[4dvh]">Mani sludinājumi</a>
                    <a href="" className="text-black font-clash-reg text-clamp-4xl mb-[4dvh]">Meklēšana</a>
                    <a href="" className="text-black font-clash-reg text-clamp-4xl mb-[4dvh]">Memo</a>
                </div>
            </div>
        </header>
    );
}
