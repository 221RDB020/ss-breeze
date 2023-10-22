import EuroIcon from "@mui/icons-material/Euro";
import {Pagination} from "@mui/material";
import React, {useEffect, useState} from "react";
import {Advertisement, Category} from "@/types/app";

type TableProps = {
    category: Category;
    subcategory: Category;
    subcategory2?: Category|null;
    advertisements: Advertisement[];
};

export default function AdsTable({category, subcategory, subcategory2, advertisements}: TableProps) {
    const [currentPage, setCurrentPage] = useState(1);
    const rowsPerPage = 20;

    const indexOfLastRow = currentPage * rowsPerPage;
    const indexOfFirstRow = indexOfLastRow - rowsPerPage;
    const currentRows = advertisements.slice(indexOfFirstRow, indexOfLastRow);
    const totalPages = Math.ceil(advertisements.length / rowsPerPage);

    const handlePageChange = (event: React.ChangeEvent<unknown>, value: number) => {
        setCurrentPage(value);
    }

    useEffect(() => {
        const clickableRows = document.querySelectorAll(".clickable-row");

        clickableRows.forEach((row) => {
            row.addEventListener("click", () => {
                window.location.href = row.getAttribute("data-href") || "";
            });
        });
    }, []);
    return (
        <div
            className="grid gap-4 h-full max-w-full mt-3 md:mt-9 mb-4 md:mb-16 px-0 md:px-10 py-0 md:py-5 bg-white md:rounded-xl md:border-[3px] border-black md:shadow-neubrutal">
            <table>
                <thead>
                <tr className="bg-black">
                    <th scope="col"
                        className="px-3 xl:px-6 py-2 w-3/5 text-left font-clash-med text-clamp-xl text-white tracking-wider">
                        <div className="flex justify-between">
                            <p>Sludinājumi</p>
                            <a href="">Datums</a>
                        </div>
                    </th>
                    <th scope="col" className="px-3 xl:px-6 py-2 font-clash-med text-clamp-xl text-white tracking-wider">
                        <a href="">Modelis</a>
                    </th>
                    <th scope="col"
                        className="hidden lg:table-cell px-3 xl:px-6 py-2 font-clash-med text-clamp-xl text-white tracking-wider">
                        <a href="">Gads</a>
                    </th>
                    <th scope="col"
                        className="hidden lg:table-cell px-3 xl:px-6 py-2 font-clash-med text-clamp-xl text-white tracking-wider">
                        <a href="">Tilp.</a>
                    </th>
                    <th scope="col"
                        className="hidden xl:table-cell px-6 py-2 font-clash-med text-clamp-xl text-white tracking-wider">
                        <a href="">Nobrauk.</a>
                    </th>
                    <th scope="col" className="px-3 xl:px-6 py-2 font-clash-med text-clamp-xl text-white tracking-wider">
                        <a href="">Cena</a>
                    </th>
                </tr>
                </thead>
                <tbody className="divide-y divide-text divide-dashed">
                {
                    currentRows.map((ad) => {
                        return (
                            <tr className="clickable-row cursor-pointer divide-x divide-text divide-dashed hover:bg-background"
                                data-href={subcategory2 ?
                                    route('_advertisement.show',{ category: category.url, subcategory: subcategory.url, _subcategory: subcategory2.url, ad: ad.id }) :
                                    route('advertisement.show',{ category: category.url, subcategory: subcategory.url, ad: ad.id })
                                }
                                key={ad.id}
                            >
                                <td className="flex items-center my-0 lg:my-1 overflow-clip">
                                    <div className="flex items-center justify-center w-1/3 xl:w-1/5 h-[12dvh] overflow-clip">
                                        <img className="h-fit w-full" src="/images/car_demo.jpeg" alt="ad_img"/>
                                    </div>
                                    <p className="px-3 xl:px-6 font-clash-reg text-text text-clamp-xl w-2/3 xl:w-4/5 line-clamp-2">
                                        {ad.ad_text}
                                    </p>
                                </td>
                                <td className="text-center text-clamp-xl font-clash-sbol uppercase px-3 xl:px-6">
                                    {ad.model}
                                </td>
                                <td className="hidden lg:table-cell text-center text-clamp-xl font-clash-med px-3 xl:px-6">
                                    {ad.car_manufacturing_year}
                                </td>
                                <td className="hidden lg:table-cell text-center text-clamp-xl font-clash-med px-3 xl:px-6">
                                    {new Intl.NumberFormat('en-IS', {minimumFractionDigits: 1}).format(ad.engine_capacity)}
                                </td>
                                <td className="hidden xl:table-cell text-center text-clamp-xl font-clash-med px-3 xl:px-6 whitespace-nowrap">
                                    {new Intl.NumberFormat('ru-RU', {maximumSignificantDigits: 3}).format(ad.car_mileage)}&nbsp;
                                    km
                                </td>
                                <td className="text-center text-clamp-xl font-clash-sbol px-3 xl:px-6 whitespace-nowrap">
                                        <span
                                            className="flex items-center justify-center tracking-wide">
                                            {new Intl.NumberFormat('ru-RU').format(ad.price)}
                                            <EuroIcon sx={{fontSize: 'inherit'}} className={`ml-0.5 lg:ml-1`}/>
                                        </span>
                                </td>
                            </tr>
                        )
                    })
                }
                </tbody>
            </table>
            {(advertisements.length === 0) &&
                <div className="flex justify-center items-center h-[10vh] my-16">
                    <p className="px-20 py-10 border-2 text-black font-clash-reg text-clamp-xl">
                        Sludinājumi dotajā kategorijā nav atrasti
                    </p>
                </div>
            }
            {totalPages > 0 &&
                <Pagination count={totalPages} onChange={handlePageChange} className={`flex justify-center my-4`}/>
            }
        </div>
    );
}
