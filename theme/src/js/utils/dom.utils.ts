export function querySelectorArray<T extends Element = HTMLElement>(el: HTMLElement | string, selector?: string): T[] {
    const root: HTMLElement | Document = typeof el === 'string' ? document : el;
    const target: string = typeof el === 'string' ? el : selector;

    return target
        ? Array.from(root.querySelectorAll(target)) as T[]
        : [];
}