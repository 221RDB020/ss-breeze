import React from "react";
import {Head, Link} from '@inertiajs/react';
import Router from "@/Components/Router";
import MainLayout from '@/Layouts/MainLayout';
import { SiAudi } from 'solid-icons/si'
import EuroIcon from "@mui/icons-material/Euro";
import FullscreenRoundedIcon from '@mui/icons-material/FullscreenRounded';
import LocalPhoneRoundedIcon from '@mui/icons-material/LocalPhoneRounded';
import EmailRoundedIcon from '@mui/icons-material/EmailRounded';
import LocationOnIcon from '@mui/icons-material/LocationOn';
import TabList from "@/Components/TabList";

type Category = {
    id: number;
    name: string;
    url: string;
    categoryHead: string;
    hasChildren: boolean;
    advertisementCount: number;
};

type Advertisement = {
    id: number;
    ad_text: string;
    model: string;
    car_manufacturing_year: number;
    engine_capacity: number;
    car_mileage: number;
    price: number;
    brand: string;
    engine_type: number;
    car_gearbox: number;
    car_body_type: number;
    gear_count: number;
    technical_inspection: string;
    colour: string;
    vin: string;
    number_plate: string;
    phone: string;
    location: string;
    created_at: string;
    views: number;
    vehicle_options: Array<unknown>;
};

type PageProps = {
    category: Category;
    subcategory: Category;
    subcategory2?: Category|null;
    ad: Advertisement;
};

export default function Show({category, subcategory, subcategory2, ad}: PageProps) {
    const getEngineTypeLabel = (engineType: number): string => {
        switch (engineType) {
            case 1:
                return 'Benzīns';
            case 2:
                return 'Benzīns/Gāze';
            case 3:
                return 'Dīzelis';
            case 4:
                return 'Hybrid';
            case 5:
                return 'Elektriskais';
            default:
                return 'Cits';
        }
    };

    const getGearboxTypeLabel = (gearboxType: number): string => {
        switch (gearboxType) {
            case 1:
                return 'Manuāla';
            case 2:
                return 'Automāts';
            default:
                return 'Cits';
        }
    };

    const getColorLabel = (colour: string): string => {
        switch (colour) {
            case '#ffffff':
                return 'Balta';
            case '#967E76':
                return 'Brūna';
            case '#FFD966':
                return 'Dzeltena';
            case '#B4E4FF':
                return 'Gaiši zila';
            case '#000000':
                return 'Melna';
            case '#FAAB78':
                return 'Oranža';
            case '#B7B7B7':
                return 'Pelēka';
            case '#EF4B4B':
                return 'Sarkana';
            case '#F9F9F9':
                return 'Sudraba';
            case '#BD574E':
                return 'Tumši sarkana';
            case '#B689B0':
                return 'Violeta';
            case '#B0E0A8':
                return 'Zaļa';
            case '#6096B4':
                return 'Zila';
            case 'cita':
                return 'Cita';
            default:
                return '';
        }
    };

    const getBodyTypeLabel = (bodyType: number): string => {
        switch (bodyType) {
            case 1:
                return 'Apvidus';
            case 2:
                return 'Hečbeks';
            case 3:
                return 'Sedans';
            case 4:
                return 'Universāls';
            case 5:
                return 'Kabriolets';
            case 6:
                return 'Kupeja';
            case 7:
                return 'Mikroautobuss';
            case 8:
                return 'Minivens';
            case 9:
                return 'Pikaps';
            default:
                return 'Cits';
        }
    };

    return (
        <>
            <MainLayout>
                <Head title={(subcategory2 ? subcategory2.name : subcategory.name) + " " + ad.model.toUpperCase()} />
                <section className="flex flex-col min-h-[80dvh] lg:px-24 sm:px-10 px-5 border-b-[3px] border-black">
                    <Router category={category} subcategory={subcategory} subcategory2={subcategory2} />
                    <div className="flex flex-col-reverse lg:flex-row mt-12 mx-6 justify-between">
                        <div
                            className="flex relative justify-between w-full max-w-[400px] min-h-[60vh] border-[3px] border-black shadow-neubrutal rounded-xl flex-col flex-grow bg-white">
                            <div className="flex relative justify-between items-center h-20 px-9 pt-5">
                                <div>
                                    <h4 className="text-black leading-6 text-clamp-3xl font-clash-med">{ad.brand}</h4>
                                    <p className="text-text leading-5 text-clamp-2xl font-clash-med normal-case">{ad.model}</p>
                                </div>
                                {/*<SiAudi className={`w-1/3 absolute right-9`} />*/}
                            </div>
                            <div className="pl-9">
                                <p className="text-text leading-6 text-clamp-xl font-clash-reg">Gads:</p>
                                <p className="text-black text-clamp-2xl font-clash-reg">{ad.car_manufacturing_year}</p>
                                <p className="text-text leading-6 text-clamp-xl font-clash-reg">Motors:</p>
                                <p className="text-black text-clamp-2xl font-clash-reg">
                                    {ad.engine_capacity}{' '}
                                    {getEngineTypeLabel(ad.engine_type)}
                                </p>
                                <p className="text-text leading-6 text-clamp-xl font-clash-reg">Ātr.kārba:</p>
                                <p className="text-black text-clamp-2xl font-clash-reg">
                                    {getGearboxTypeLabel(ad.car_gearbox)}
                                    {' '}{ad.gear_count}{' '}
                                    ātrumi
                                </p>
                                <p className="text-text leading-6 text-clamp-xl font-clash-reg">Nobraukums, km:</p>
                                <p className="text-black text-clamp-2xl font-clash-reg">{ad.car_mileage}</p>
                                <p className="text-text leading-6 text-clamp-xl font-clash-reg">Krāsa:</p>
                                <p className="text-black text-clamp-2xl font-clash-reg flex items-center">
                                    {getColorLabel(ad.colour)}
                                    <span className="flex ml-3 w-[2.5rem] h-[1.5rem] rounded-lg"
                                          style={{backgroundColor: ad.colour}}></span>
                                </p>
                                <p className="text-text leading-6 text-clamp-xl font-clash-reg">Virsbūves tips:</p>
                                <p className="text-black text-clamp-2xl font-clash-reg">
                                    {getBodyTypeLabel(ad.car_body_type)}
                                </p>
                                <p className="text-text leading-6 text-clamp-xl font-clash-reg">Tehniskā apskate:</p>
                                <p className="text-black text-clamp-2xl font-clash-reg">{ad.technical_inspection.replace('-','.')}</p>
                            </div>
                            <div className="flex items-center justify-center h-12 w-full bg-black">
                                <EuroIcon sx={{fontSize: 'inherit', color: '#ffffff'}} className={`mr-0.5 lg:mr-1`}/>
                                <span
                                    className="text-white text-clamp-2xl font-clash-med">{ad.price}</span>
                            </div>
                        </div>
                        <div
                            className="flex relative w-full ml-[5vw] min-h-[60vh] bg-white shadow-neubrutal-white rounded-lg border-[3px] border-black">
                            <div
                                className="absolute -top-1 -left-1 right-[-3px] bottom-[-3px] bg-black shadow-neubrutal rounded-xl border-[3px] border-black"
                                style={{clipPath: 'polygon(0% 0%, 110% 0, 110% 70%, 70% 110%, 0% 110%)'}}>
                                <div className="flex w-full h-full bg-white rounded-lg"
                                     style={{clipPath: 'polygon(0% 0%, 100% 0, 100% 79%, 79% 100%, 0% 100%)'}}>
                                    <div
                                        className="flex items-center w-3/4 mx-9 my-6 h-[calc(60vh-48px)] max-h-[542px] border-[3px] border-black rounded-xl overflow-clip">
                                        <img className="w-full h-fit" src="/images/car_demo.jpeg" alt="ad-image"/>
                                    </div>
                                    <div className="flex flex-col w-1/5 h-3/4 justify-between pt-6 pr-9">
                                        <div className="flex h-[122px] items-center border-[3px] border-black rounded-xl overflow-clip">
                                            <img className="w-full h-fit" src="/images/car_demo.jpeg" alt="ad-image"/>
                                        </div>
                                        <div className="flex h-[122px] items-center border-[3px] border-black rounded-xl overflow-clip">
                                            <img className="w-full h-fit" src="/images/car_demo.jpeg" alt="ad-image"/>
                                        </div>
                                        <div className="flex justify-center items-center h-[122px] border-[3px] border-black rounded-xl">
                                            <div className="flex w-14 justify-between">
                                                <div className="w-4 h-4 rounded-full border-[3px] border-black"></div>
                                                <div className="w-4 h-4 rounded-full border-[3px] border-black"></div>
                                                <div className="w-4 h-4 rounded-full border-[3px] border-black"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className={`text-5xl cursor-pointer`}>
                                <FullscreenRoundedIcon sx={{fontSize: 'inherit'}} className={`absolute right-2 bottom-2 w-14`}/>
                            </div>
                        </div>
                    </div>
                    <div className="flex flex-col bg-white mx-6 my-24 pb-16 rounded-xl border-[3px] border-black shadow-neubrutal">
                        <TabList ad={ad}/>
                    </div>
                    <div className="flex justify-end px-6 mb-12 font-clash-reg text-clamp-xl text-text tracking-wider">
                        <p>Unikālo apmeklētāju skaits: <span>{ad.views}</span></p>
                        <p className="ml-6">Datums: <span>{ad.created_at}</span></p>
                    </div>
                    <div className="flex flex-col mb-24 mx-6">
                        <h4 className="font-clash-reg text-clamp-3xl ml-9">Līdzīgi sludinājumi:</h4>
                        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-4">
                            <Link href="#">
                                <div className="flex flex-col rounded-xl border-[3px] border-black">
                                    <div className="flex justify-between px-2">
                                        <h4 className="font-clash-med text-clamp-xl">Audi S4</h4>
                                        <div className="flex">
                                            <EuroIcon sx={{fontSize: 'inherit', color: '#ffffff'}} className={`mr-0.5 lg:mr-1`}/>
                                            <h4 className="font-clash-med text-clamp-xl">14 200</h4>
                                        </div>
                                    </div>
                                    <div className="flex w-full max-h-[265px] overflow-clip">
                                        <img className="w-full h-fit" src="/images/car_demo.jpeg" alt="ad-image"/>
                                    </div>
                                    <div className="flex justify-center">
                                        <p className="text-sm leading-7 text-text font-clash-reg">
                                            3.0 benzīns | Automāts | Sedans | 2009
                                        </p>
                                    </div>
                                </div>
                            </Link>
                            <Link href="#">
                                <div className="flex flex-col rounded-xl border-[3px] border-black">
                                    <div className="flex justify-between px-2">
                                        <h4 className="font-clash-med text-clamp-xl">Audi S4</h4>
                                        <div className="flex">
                                            <EuroIcon sx={{fontSize: 'inherit', color: '#ffffff'}} className={`mr-0.5 lg:mr-1`}/>
                                            <h4 className="font-clash-med text-clamp-xl">14 200</h4>
                                        </div>
                                    </div>
                                    <div className="flex w-full max-h-[265px] overflow-clip">
                                        <img className="w-full h-fit" src="/images/car_demo.jpeg" alt="ad-image"/>
                                    </div>
                                    <div className="flex justify-center">
                                        <p className="text-sm leading-7 text-text font-clash-reg">
                                            3.0 benzīns | Automāts | Sedans | 2009
                                        </p>
                                    </div>
                                </div>
                            </Link>
                            <Link href="#">
                                <div className="flex flex-col rounded-xl border-[3px] border-black">
                                    <div className="flex justify-between px-2">
                                        <h4 className="font-clash-med text-clamp-xl">Audi S4</h4>
                                        <div className="flex">
                                            <EuroIcon sx={{fontSize: 'inherit', color: '#ffffff'}} className={`mr-0.5 lg:mr-1`}/>
                                            <h4 className="font-clash-med text-clamp-xl">14 200</h4>
                                        </div>
                                    </div>
                                    <div className="flex w-full max-h-[265px] overflow-clip">
                                        <img className="w-full h-fit" src="/images/car_demo.jpeg" alt="ad-image"/>
                                    </div>
                                    <div className="flex justify-center">
                                        <p className="text-sm leading-7 text-text font-clash-reg">
                                            3.0 benzīns | Automāts | Sedans | 2009
                                        </p>
                                    </div>
                                </div>
                            </Link>
                            <Link href="#">
                                <div className="flex flex-col rounded-xl border-[3px] border-black">
                                    <div className="flex justify-between px-2">
                                        <h4 className="font-clash-med text-clamp-xl">Audi S4</h4>
                                        <div className="flex">
                                            <EuroIcon sx={{fontSize: 'inherit', color: '#ffffff'}} className={`mr-0.5 lg:mr-1`}/>
                                            <h4 className="font-clash-med text-clamp-xl">14 200</h4>
                                        </div>
                                    </div>
                                    <div className="flex w-full max-h-[265px] overflow-clip">
                                        <img className="w-full h-fit" src="/images/car_demo.jpeg" alt="ad-image"/>
                                    </div>
                                    <div className="flex justify-center">
                                        <p className="text-sm leading-7 text-text font-clash-reg">
                                            3.0 benzīns | Automāts | Sedans | 2009
                                        </p>
                                    </div>
                                </div>
                            </Link>
                        </div>
                    </div>
                </section>
            </MainLayout>
        </>
    );
}
