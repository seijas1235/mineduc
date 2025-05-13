import KTEventHandler from '../helpers/event-handler';
import KTUtils from '../helpers/utils';
import { KTOptionType } from '../types';

export default class KTComponent {
    protected _element: HTMLElement;
    protected _name: string = '';
    protected _defaultConfig: object = {};
    protected _config: object = {};
    protected _events: string[] = [];
    protected _listeners: (() => void)[] = [];

    constructor() {
        // Base constructor
    }

    protected _init(element: HTMLElement): void {
        this._element = element;
    }

    protected _buildConfig(config?: object): void {
        this._config = { ...this._defaultConfig, ...config };
    }

    protected _getOption(name: string): KTOptionType {
        return KTUtils.getObjectPropertyValueByKey(this._config, name);
    }

    protected _getResponsiveOption(value: string): KTOptionType {
        return value;
    }

    protected _fireEvent(name: string, payload?: any): void {
        KTEventHandler.trigger(this._element, `kt.${this._name}.${name}`, payload);
    }

    protected _dispatchEvent(name: string, payload?: any): void {
        const event = new CustomEvent(`kt.${this._name}.${name}`, {
            detail: payload,
            bubbles: true,
            cancelable: true
        });
        this._element.dispatchEvent(event);
    }

    public dispose(): void {
        // Remove event listeners
        this._listeners.forEach(listener => {
            listener();
        });
        this._listeners = [];
    }
}