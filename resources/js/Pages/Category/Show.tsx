import { Head } from '@inertiajs/react';
import MainLayout from '@/Layouts/MainLayout';
import CategoryShowSection from "@/Components/CategoryShowSection";

type Category = {
    id: number;
    name: string;
    url: string;
    parent_url: string;
    categoryHead: string;
    hasChildren: boolean;
    advertisementCount: number;
};

type PageProps = {
    category: Category;
    subcategory?: Category|null;
    categoryChildren: Category[];
};

export default function Show({category, subcategory, categoryChildren}: PageProps) {
    return (
        <>
            <MainLayout>
                <Head title={subcategory ? subcategory.name : category.name} />
                <CategoryShowSection category={category} subcategory={subcategory} categoryChildren={categoryChildren}/>
            </MainLayout>
        </>
    );
}
