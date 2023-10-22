import LocalPhoneRoundedIcon from "@mui/icons-material/LocalPhoneRounded";
import EmailRoundedIcon from "@mui/icons-material/EmailRounded";
import LocationOnIcon from "@mui/icons-material/LocationOn";
import React, { useEffect } from "react";

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
    vehicle_options: string;
};

type ComponentProps = {
    ad: Advertisement;
};

export default function TabList({ad}: ComponentProps) {
    useEffect(() => {
        const tabsContainer: HTMLElement = document.querySelector("[role=tablist]")!;
        const tabPanels = document.querySelectorAll("[role=tabpanel]");

        if (tabsContainer) {
            const tabButtons = tabsContainer.querySelectorAll("[role=tab]");

            const moveLeft = () => {
                const currentTab = document.activeElement as HTMLButtonElement;
                if (!currentTab.previousElementSibling) {
                    (tabButtons[tabButtons.length - 1] as HTMLButtonElement).focus();
                } else {
                    (currentTab.previousElementSibling as HTMLButtonElement).focus();
                }
            };

            const moveRight = () => {
                const currentTab = document.activeElement as HTMLButtonElement;
                if (!currentTab.nextElementSibling) {
                    (tabButtons[0] as HTMLButtonElement).focus();
                } else {
                    (currentTab.nextElementSibling as HTMLButtonElement).focus();
                }
            };

            const switchTab = (newTab: HTMLButtonElement) => {
                const oldTab = tabsContainer.querySelector('[aria-selected="true"]') as HTMLButtonElement;
                const activePanelId = newTab.getAttribute("aria-controls")!;
                const activePanel = document.getElementById(activePanelId) as HTMLElement;

                tabButtons.forEach((button) => {
                    button.setAttribute("aria-selected", "false");
                    button.setAttribute("tabIndex", "-1");
                });

                tabPanels.forEach((panel) => {
                    panel.classList.add("hidden");
                });

                activePanel.classList.remove("hidden");

                newTab.setAttribute("aria-selected", "true");
                newTab.setAttribute("tabIndex", "0");
                newTab.focus();
                moveIndicator(oldTab, newTab);
            };

            const moveIndicator = (oldTab: HTMLButtonElement, newTab: HTMLButtonElement) => {
                const newTabPosition = oldTab.compareDocumentPosition(newTab);
                const newTabWidth = newTab.offsetWidth / tabsContainer.offsetWidth;
                let transitionWidth: number;

                if (newTabPosition === 4) {
                    transitionWidth = newTab.offsetLeft + newTab.offsetWidth - oldTab.offsetLeft;
                } else {
                    transitionWidth = oldTab.offsetLeft + oldTab.offsetWidth - newTab.offsetLeft;
                    tabsContainer.style.setProperty("--_left", newTab.offsetLeft + "px");
                }

                tabsContainer.style.setProperty("--_width", `${transitionWidth / tabsContainer.offsetWidth}`);

                setTimeout(() => {
                    tabsContainer.style.setProperty("--_left", `${newTab.offsetLeft}px`);
                    tabsContainer.style.setProperty("--_width", `${newTabWidth}`);
                }, 220);
            };

            tabsContainer.addEventListener("click", (e) => {
                const clickedTab = (e.target as HTMLElement).closest("button") as HTMLButtonElement;
                const currentTab = tabsContainer.querySelector('[aria-selected="true"]') as HTMLButtonElement;

                if (!clickedTab || clickedTab === currentTab) return;

                switchTab(clickedTab);
            });

            tabsContainer.addEventListener("keydown", (e) => {
                switch (e.key) {
                    case "ArrowLeft":
                        moveLeft();
                        break;
                    case "ArrowRight":
                        moveRight();
                        break;
                    case "Home":
                        e.preventDefault();
                        switchTab(tabButtons[0] as HTMLButtonElement);
                        break;
                    case "End":
                        e.preventDefault();
                        switchTab(tabButtons[tabButtons.length - 1] as HTMLButtonElement);
                        break;
                    default:
                        break;
                }
            });
        }
    }, []);

    return (
        <>
            <div className="text-clamp-2xl font-clash-med" role="tablist" aria-labelledby="channel-name">
                <button
                    id="tab-1"
                    role="tab"
                    aria-controls="tabPanel-1"
                    aria-selected="true"
                    tabIndex={0}
                    className="tracking-wide">
                    Apraksts
                </button>
                <button
                    id="tab-2"
                    role="tab"
                    aria-controls="tabPanel-2"
                    aria-selected="false"
                    tabIndex={-1}
                    className="tracking-wide">
                    Aprīkojums
                </button>
                <button
                    id="tab-3"
                    role="tab"
                    aria-controls="tabPanel-3"
                    aria-selected="false"
                    tabIndex={-1}
                    className="tracking-wide">
                    Dati
                </button>
                <button
                    id="tab-4"
                    role="tab"
                    aria-controls="tabPanel-4"
                    aria-selected="false"
                    tabIndex={-1}
                    className="tracking-wide">
                    Kontakti
                </button>
            </div>
            <div className="tab-panels flex mx-9">
                <div className="pl-10" id="tabPanel-1" role="tabpanel" tabIndex={0} aria-labelledby="tab-1">
                    <p className="max-w-[75ch] font-clash-reg text-clamp-xl tracking-wider text-black">
                        {ad.ad_text}
                    </p>
                </div>
                <div className="grid hidden" id="tabPanel-2" role="tabpanel" tabIndex={0} aria-labelledby="tab-2">
                    <div className="row-span-2 col-span-2 rounded-xl border-[3px] border-black bg-white px-9 py-4">
                        <h4 className="font-clash-med text-clamp-xl">Aprīkojums</h4>
                        <div className="grid grid-cols-2 grid-rows-2 py-4 w-full h-full text-text font-clash-reg text-sm">
                            <div>
                                <p className={JSON.parse(ad.vehicle_options)[0] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Stūres hidropastiprinātājs</p>
                                <p className={JSON.parse(ad.vehicle_options)[1] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Elektr. stūres pastiprinātājs</p>
                                <p className={JSON.parse(ad.vehicle_options)[2] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Kondicionieris</p>
                                <p className={JSON.parse(ad.vehicle_options)[3] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Klimata kontrole</p>
                                <p className={JSON.parse(ad.vehicle_options)[4] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Autonomais sildītājs</p>
                                <p className={JSON.parse(ad.vehicle_options)[5] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Salona gaisa
                                    filtrs</p>
                                <p className={JSON.parse(ad.vehicle_options)[6] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Borta dators</p>
                                <p className={JSON.parse(ad.vehicle_options)[7] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Riepu spiediena
                                    kontrole</p>
                                <p className={JSON.parse(ad.vehicle_options)[8] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Parkošanās sens. priekšā</p>
                                <p className={JSON.parse(ad.vehicle_options)[9] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Atpakaļskata
                                    kamera</p>
                            </div>
                            <div>
                                <p className={JSON.parse(ad.vehicle_options)[10] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Atpakaļskata kamera</p>
                                <p className={JSON.parse(ad.vehicle_options)[11] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Nakts redzamības kamera</p>
                                <p className={JSON.parse(ad.vehicle_options)[12] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Panorāmas redzam. kameras</p>
                                <p className={JSON.parse(ad.vehicle_options)[13] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Distances kontrole</p>
                                <p className={JSON.parse(ad.vehicle_options)[14] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Lietus
                                    sensors</p>
                                <p className={JSON.parse(ad.vehicle_options)[15] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Kruīza
                                    kontrole</p>
                                <p className={JSON.parse(ad.vehicle_options)[16] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Adaptīvā kruīzkontrole</p>
                                <p className={JSON.parse(ad.vehicle_options)[17] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Gājēju detektors</p>
                                <p className={JSON.parse(ad.vehicle_options)[18] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Automātiskā parkošanās</p>
                                <p className={JSON.parse(ad.vehicle_options)[19] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Ceļa zīmju atpazīš. sistēma</p>
                            </div>
                            <div>
                                <p className={JSON.parse(ad.vehicle_options)[20] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Klusuma zonu asistents</p>
                                <p className={JSON.parse(ad.vehicle_options)[21] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Palīgsistēma braukš. joslās</p>
                                <p className={JSON.parse(ad.vehicle_options)[22] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Avārijas
                                    bremzēšanas sist.</p>
                                <p className={JSON.parse(ad.vehicle_options)[23] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Keyless Go</p>
                                <p className={JSON.parse(ad.vehicle_options)[24] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Sistēma Start-Stop</p>
                                <p className={JSON.parse(ad.vehicle_options)[25] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    El. bagāžnieka aizvēršana</p>
                                <p className={JSON.parse(ad.vehicle_options)[26] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    El. aizmugures saulessargs</p>
                                <p className={JSON.parse(ad.vehicle_options)[27] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    El. durvju aizvēršana</p>
                                <p className={JSON.parse(ad.vehicle_options)[28] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Jumta reliņi</p>
                                <p className={JSON.parse(ad.vehicle_options)[29] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Sakabes āķis</p>
                            </div>
                            <div>
                                <p className={JSON.parse(ad.vehicle_options)[30] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Lūka</p>
                                <p className={JSON.parse(ad.vehicle_options)[31] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Panorāmas lūka</p>
                                <p className={JSON.parse(ad.vehicle_options)[32] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Pilnpiedziņa
                                    4x4</p>
                                <p className={JSON.parse(ad.vehicle_options)[33] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Pneimopiekare</p>
                                <p className={JSON.parse(ad.vehicle_options)[34] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Spoileris</p>
                                <p className={JSON.parse(ad.vehicle_options)[35] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Sliekšņi</p>
                                <p className={JSON.parse(ad.vehicle_options)[36] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Sporta pakete</p>
                                <p className={JSON.parse(ad.vehicle_options)[37] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Servisa grāmatiņa</p>
                                <p className={JSON.parse(ad.vehicle_options)[38] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Vieglmetāla
                                    diski</p>
                            </div>
                        </div>
                    </div>
                    <div className="row-span-1 col-span-1 rounded-xl border-[3px] border-black bg-white px-9 py-4">
                        <h4 className="font-clash-med text-clamp-xl">Salons</h4>
                        <div className="grid grid-cols-1 grid-rows-1 py-4 w-full h-full text-text font-clash-reg text-sm">
                            <div>
                                <p className={JSON.parse(ad.vehicle_options)[39] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Ādas apdare</p>
                                <p className={JSON.parse(ad.vehicle_options)[40] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Roku balsti</p>
                                <p className={JSON.parse(ad.vehicle_options)[41] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Tonēti
                                    aizmugurējie logi</p>
                                <p className={JSON.parse(ad.vehicle_options)[42] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Saulessargi
                                    logiem</p>
                                <p className={JSON.parse(ad.vehicle_options)[43] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Isofix
                                    stiprinājumi</p>
                                <p className={JSON.parse(ad.vehicle_options)[44] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Ledusskapis</p>
                            </div>
                        </div>
                    </div>
                    <div className="row-span-1 col-span-1 rounded-xl border-[3px] border-black bg-white px-9 py-4">
                        <h4 className="font-clash-med text-clamp-xl">Stūre</h4>
                        <div className="grid grid-cols-1 grid-rows-1 py-4 w-full h-full text-text font-clash-reg text-sm">
                            <div>
                                <p className={JSON.parse(ad.vehicle_options)[45] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Regulējama</p>
                                <p className={JSON.parse(ad.vehicle_options)[46] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    El. regulējama</p>
                                <p className={JSON.parse(ad.vehicle_options)[47] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Daudzfunkcionāla</p>
                                <p className={JSON.parse(ad.vehicle_options)[48] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Sporta</p>
                                <p className={JSON.parse(ad.vehicle_options)[49] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Apsildāma</p>
                                <p className={JSON.parse(ad.vehicle_options)[50] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Ar. atmiņu</p>
                            </div>
                        </div>
                    </div>
                    <div className="row-span-1 col-span-1 rounded-xl border-[3px] border-black bg-white px-9 py-4">
                        <h4 className="font-clash-med text-clamp-xl">Sēdekļi</h4>
                        <div className="grid grid-cols-1 grid-rows-1 py-4 w-full h-full text-text font-clash-reg text-sm">
                            <div>
                                <p className="text-black pl-2 font-clash-med border-l-[4px] border-accent">El.
                                    regulējami</p>
                                <p className={JSON.parse(ad.vehicle_options)[51] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Apsildāmi</p>
                                <p className={JSON.parse(ad.vehicle_options)[52] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Sporta</p>
                                <p className={JSON.parse(ad.vehicle_options)[53] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Recaro</p>
                                <p className={JSON.parse(ad.vehicle_options)[54] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Ventilējami</p>
                                <p className={JSON.parse(ad.vehicle_options)[55] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Masāžas</p>
                                <p className={JSON.parse(ad.vehicle_options)[56] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Ar atmiņu</p>
                            </div>
                        </div>
                    </div>
                    <div className="row-span-2 col-span-1 rounded-xl border-[3px] border-black bg-white px-9 py-4">
                        <h4 className="font-clash-med text-clamp-xl">Hi-Fi</h4>
                        <div className="grid grid-cols-1 grid-rows-2 py-4 w-full h-full text-text font-clash-reg text-sm">
                            <div>
                                <p className={JSON.parse(ad.vehicle_options)[57] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    FM/AM</p>
                                <p className={JSON.parse(ad.vehicle_options)[58] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    CD</p>
                                <p className={JSON.parse(ad.vehicle_options)[59] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    CD mainītājs</p>
                                <p className={JSON.parse(ad.vehicle_options)[60] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    DVD</p>
                                <p className={JSON.parse(ad.vehicle_options)[61] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    DVD mainītājs</p>
                                <p className={JSON.parse(ad.vehicle_options)[62] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    MP3</p>
                                <p className={JSON.parse(ad.vehicle_options)[63] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    USB</p>
                                <p className={JSON.parse(ad.vehicle_options)[64] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    SDcard</p>
                            </div>
                            <div>
                                <p className={JSON.parse(ad.vehicle_options)[65] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    HDD</p>
                                <p className={JSON.parse(ad.vehicle_options)[66] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    TV</p>
                                <p className={JSON.parse(ad.vehicle_options)[67] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    LCD</p>
                                <p className={JSON.parse(ad.vehicle_options)[68] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Navigācija</p>
                                <p className={JSON.parse(ad.vehicle_options)[69] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Tel./mob.</p>
                                <p className={JSON.parse(ad.vehicle_options)[70] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Bluetooth</p>
                                <p className={JSON.parse(ad.vehicle_options)[71] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Hands-free</p>
                                <p className={JSON.parse(ad.vehicle_options)[72] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Subwoofer</p>
                            </div>
                        </div>
                    </div>
                    <div className="row-span-1 col-span-1 rounded-xl border-[3px] border-black bg-white px-9 py-4">
                        <h4 className="font-clash-med text-clamp-xl">Gaismas</h4>
                        <div className="grid grid-cols-1 grid-rows-1 py-4 w-full h-full text-text font-clash-reg text-sm">
                            <div>
                                <p className={JSON.parse(ad.vehicle_options)[73] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Xenona</p>
                                <p className={JSON.parse(ad.vehicle_options)[74] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Bi xenona</p>
                                <p className={JSON.parse(ad.vehicle_options)[75] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    LED</p>
                                <p className={JSON.parse(ad.vehicle_options)[76] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    LED
                                    bremžugunis</p>
                                <p className={JSON.parse(ad.vehicle_options)[77] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Papild. bremžu signāls</p>
                                <p className={JSON.parse(ad.vehicle_options)[78] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Miglas lukturi</p>
                                <p className={JSON.parse(ad.vehicle_options)[79] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Lampu mazgātāji</p>
                                <p className={JSON.parse(ad.vehicle_options)[80] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Automāt. tuvās gaismas</p>
                                <p className={JSON.parse(ad.vehicle_options)[81] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Automāt. tālās gaismas</p>
                                <p className={JSON.parse(ad.vehicle_options)[82] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Adaptīvās tālās gaismas</p>
                            </div>
                        </div>
                    </div>
                    <div className="row-span-1 col-span-1 rounded-xl border-[3px] border-black bg-white px-9 py-4">
                        <h4 className="font-clash-med text-clamp-xl">Spoguļi</h4>
                        <div className="grid grid-cols-1 grid-rows-1 py-4 w-full h-full text-text font-clash-reg text-sm">
                            <div>
                                <p className={JSON.parse(ad.vehicle_options)[83] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    El.
                                    regulējami</p>
                                <p className={JSON.parse(ad.vehicle_options)[84] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Apsildāmi</p>
                                <p className={JSON.parse(ad.vehicle_options)[85] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Aptumšojošie</p>
                                <p className={JSON.parse(ad.vehicle_options)[86] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Sporta</p>
                                <p className={JSON.parse(ad.vehicle_options)[87] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    El. nolokāmi</p>
                                <p className={JSON.parse(ad.vehicle_options)[88] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Ar atmiņu</p>
                            </div>
                        </div>
                    </div>
                    <div className="row-span-1 col-span-1 rounded-xl border-[3px] border-black bg-white px-9 py-4">
                        <h4 className="font-clash-med text-clamp-xl">Drošība</h4>
                        <div className="grid grid-cols-1 grid-rows-1 py-4 w-full h-full text-text font-clash-reg text-sm">
                            <div>
                                <p className={JSON.parse(ad.vehicle_options)[89] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    ABS</p>
                                <p className={JSON.parse(ad.vehicle_options)[90] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Centrālā atslēga</p>
                                <p className={JSON.parse(ad.vehicle_options)[91] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Signalizācija</p>
                                <p className={JSON.parse(ad.vehicle_options)[92] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Imobilaizers</p>
                                <p className={JSON.parse(ad.vehicle_options)[93] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Air-bag</p>
                                <p className={JSON.parse(ad.vehicle_options)[94] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    ESP</p>
                                <p className={JSON.parse(ad.vehicle_options)[95] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    ASR</p>
                                <p className={JSON.parse(ad.vehicle_options)[96] === 1 ? 'text-black pl-2 font-clash-med border-l-[4px] border-accent' : ''}>
                                    Marķējums</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="pl-10 hidden" id="tabPanel-3" role="tabpanel" tabIndex={0} aria-labelledby="tab-3">
                    <h4 className="font-clash-reg text-clamp-xl text-text">VIN kods:</h4>
                    <p className="select-all uppercase font-clash-med text-clamp-xl tracking-wider text-black">{ad.vin}</p>
                    <h4 className="font-clash-reg text-clamp-xl text-text mt-6">Valst numura zīme:</h4>
                    <p className="select-all uppercase font-clash-med text-clamp-xl tracking-wider text-black">{ad.number_plate}</p>
                    <h4 className="font-clash-reg text-clamp-xl text-text mt-6">OCTA LV:</h4>
                    <a href="https://www.octa.lv/lat/"
                       className="underline font-clash-med text-clamp-xl tracking-wider text-accent">Aprēķināt
                        apdrošināšanu</a>
                </div>
                <div className="pl-10 hidden" id="tabPanel-4" role="tabpanel" tabIndex={0} aria-labelledby="tab-4">
                    <div className="flex items-center mb-6">
                        <LocalPhoneRoundedIcon className={`mr-6`}/>
                        <p className="font-clash-med text-clamp-xl tracking-wider text-black">
                            (+371) {ad.phone}</p>
                    </div>
                    <div className="flex items-center mb-6">
                        <EmailRoundedIcon className={`mr-6`}/>
                        <button id="show-email-form"
                                className="font-clash-med text-clamp-xl tracking-wider text-black hover:underline">Nosūtīt
                            e-pastu
                        </button>
                    </div>
                    <div id="email-form" hidden>
                        <form className="flex flex-col ml-14 mb-6" action="">
                            <div className="flex justify-around gap-6 mb-6">
                                <div className="flex flex-col">
                                    <label className="font-clash-reg text-sm text-text" htmlFor="email">Tavs e-pasts:</label>
                                    <input className="border-2 rounded-xl font-clash-reg px-3 py-1" type="email"
                                           name="email" id="email" placeholder="example@mail.com"/>
                                </div>
                                <div className="flex flex-col">
                                    <label className="font-clash-reg text-sm text-text" htmlFor="name">Tavs vārds:</label>
                                    <input className="border-2 rounded-xl font-clash-reg px-3 py-1" type="text" name="name"
                                           id="name" placeholder="John Wick"/>
                                </div>
                                <div className="flex flex-col">
                                    <label className="font-clash-reg text-sm text-text" htmlFor="phone">Tavs telefona
                                        numurs:</label>
                                    <input className="border-2 rounded-xl font-clash-reg px-3 py-1" type="text" name="phone"
                                           id="phone" placeholder="+371 20 202 020"/>
                                </div>
                            </div>
                            <textarea className="border-2 mb-6 rounded-xl font-clash-reg px-3 py-1" name="text" id="text"
                                      cols={30} rows={10}></textarea>
                            <input
                                className="border-2 rounded-xl font-clash-med px-3 py-1 hover:bg-background cursor-pointer"
                                type="submit" value="Sūtīt ziņojumu"/>
                        </form>
                    </div>
                    <div className="flex items-center">
                        <LocationOnIcon className={`mr-6`} />
                        <p className="font-clash-med text-clamp-xl tracking-wider text-black">{ad.location}</p>
                    </div>
                </div>
            </div>
        </>
    );
}
