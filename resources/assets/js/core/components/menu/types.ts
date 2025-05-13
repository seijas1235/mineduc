import { KTOptionType } from '../../types';

export type KTMenuItemToggleType = 'dropdown' | 'accordion';
export type KTMenuItemTriggerType = 'click' | 'hover';

export interface KTMenuConfigInterface {
    dropdownZindex?: string;
    dropdownHoverTimeout?: number;
    dropdownPlacement?: string;
    dropdownOffset?: string;
    accordionExpandAll?: boolean;
}

export interface KTMenuInterface {
    getItemTriggerMode(itemElement: HTMLElement): KTMenuItemTriggerType;
    getItemToggleMode(element: HTMLElement): KTMenuItemToggleType;
    click(element: HTMLElement, event: Event): void;
    link(element: HTMLElement, event: Event): void;
    dismiss(element: HTMLElement): void;
    mouseover(element: HTMLElement): void;
    mouseout(element: HTMLElement): void;
    show(itemElement: HTMLElement): void;
    hide(itemElement: HTMLElement): void;
    toggle(itemElement: HTMLElement): void;
    update(): void;
}