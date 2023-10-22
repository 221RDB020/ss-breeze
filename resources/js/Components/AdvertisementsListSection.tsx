import React, { useState, useEffect } from "react";
import route from "ziggy-js";
import Router from "@/Components/Router";
import AdsTable from "@/Components/AdsTable";
import {router} from "@inertiajs/react";

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
};

type PageProps = {
    category: Category;
    subcategory: Category;
    subcategory2?: Category|null;
    advertisements: Advertisement[];
};

export default function AdvertisementsListSection({category, subcategory, subcategory2, advertisements}: PageProps) {
    return (
        <section className="flex flex-col min-h-[90dvh] border-b-[3px] lg:min-h-[80dvh] lg:px-24 sm:px-10 px-0">
            <Router category={category} subcategory={subcategory} subcategory2={subcategory2} />
            <AdsTable category={category} subcategory={subcategory} subcategory2={subcategory2} advertisements={advertisements}/>
        </section>
    );
}
