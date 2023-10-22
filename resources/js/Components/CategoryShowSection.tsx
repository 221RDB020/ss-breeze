import {Link} from "@inertiajs/react";
import Router from "@/Components/Router";

type Category = {
    id: number;
    name: string;
    url: string;
    parent_url: string;
    categoryHead: string;
    hasChildren: boolean;
    advertisementCount: number;
};

type ShowSectionProps = {
    category: Category;
    subcategory?: Category|null;
    categoryChildren: Category[];
};

export default function CategoryShowSection({category, subcategory, categoryChildren}: ShowSectionProps) {
    let currentHeader: string = "";

    return (
        <section className="flex flex-col min-h-[90dvh] lg:min-h-[80dvh] lg:px-24 sm:px-10 px-5 border-b-[3px] border-black">
            <Router category={category} subcategory={subcategory} />
            <div className="grid gap-4 mt-9 mb-16 px-10 py-5 bg-white rounded-xl border-[3px] border-black shadow-neubrutal" style={{gridTemplateColumns: 'repeat(auto-fill, minmax(200px, 1fr))'}}>
                {categoryChildren.map((child) => {
                    if (child.categoryHead && currentHeader !== child.categoryHead) {
                        currentHeader = child.categoryHead;
                        return (
                            <div key={child.id} className="text-black text-xl font-clash-med py-1 col-span-full">
                                {currentHeader}
                            </div>
                        );
                    }
                    return (
                        <div key={child.id} className="flex flex-col w-full h-full border-2 border-background rounded-xl hover:bg-background">
                            <Link
                                className="text-text text-lg font-clash-reg w-full h-full px-4 py-2"
                                href={
                                    subcategory ?
                                        route('_advertisement.index', { category: category.url, subcategory: child.parent_url, _subcategory: child.url })
                                    :
                                        child.hasChildren ?
                                            route('subcategory.index', { category: category.url, subcategory: child.url })
                                        :
                                            route('advertisement.index', { category: category.url, subcategory: child.url })
                                }
                            >
                                {child.name}
                                {!child.hasChildren && (
                                    <span className="text-accent"> ({child.advertisementCount})</span>
                                )}
                            </Link>
                        </div>
                    );
                })}
            </div>
        </section>
    );
}
