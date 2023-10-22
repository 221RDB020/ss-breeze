import { Head } from '@inertiajs/react';
import MainLayout from '@/Layouts/MainLayout';
import HomeSection from "@/Components/HomeSection";
import MainCategoriesSection from "@/Components/MainCategoriesSection";
import * as Icons from "@mui/icons-material";

type Category = {
    id: number;
    parent: object;
    name: string;
    url: string;
    icon: keyof typeof Icons;
};

type PageProps = {
    categories: Category[];
};

export default function Index({categories}: PageProps) {
    return (
        <>
            <MainLayout>
                <Head title="Sludinājumi" />
                <HomeSection />
                <MainCategoriesSection categories={categories} />
            </MainLayout>
        </>
    );
}
