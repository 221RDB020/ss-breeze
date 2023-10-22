import { Head } from '@inertiajs/react';
import MainLayout from '@/Layouts/MainLayout';
import AdvertisementsListSection from "@/Components/AdvertisementsListSection";

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
    models: Array<string>;
};

export default function Index({category, subcategory, subcategory2, advertisements, models}: PageProps) {
    return (
        <>
            <MainLayout>
                <Head title={subcategory2 ? subcategory2.name : subcategory.name} />
                <AdvertisementsListSection category={category} subcategory={subcategory} subcategory2={subcategory2} advertisements={advertisements} models={models} />
            </MainLayout>
        </>
    );
}
