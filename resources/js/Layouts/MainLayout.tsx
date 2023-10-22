import { PropsWithChildren, ReactNode } from 'react';
import Header from "@/Components/Header";
import Footer from "@/Components/Footer";

export default function Authenticated({children}: PropsWithChildren<{header?: ReactNode }>) {

    return (
        <>
            <Header/>
            <>{children}</>
            <Footer/>
            <style>{`
                body {
                    background: #F2F7F8;
                    overflow-x: hidden;
                }
                .scroll::-webkit-scrollbar {
                    width: 10px;
                }
                .scroll::-webkit-scrollbar-thumb {
                    border-radius: 5px;
                    background: #F2F7F8;
                }
                .scroll::-webkit-scrollbar-thumb:hover {
                    border-radius: 5px;
                    background: #E2E7E8;
                }
            `}</style>
        </>
    );
}
